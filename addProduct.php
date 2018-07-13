<?php

require 'database/dbConnect.php';
session_start();

$rdb_categ = $_POST['item_cate'];
$itemname = $_POST['item_name'];
$itemunits = $_POST['item_units'];
$itemudiscount = $_POST['item_discount'];
$itemprice = $_POST['item_price'];
$itemdescr = $_POST['textarea'];



if ($rdb_categ == 'men') {

    $cate_type = 'men';
} elseif ($rdb_categ == 'women') {
    $cate_type = 'women';
} elseif ($rdb_categ == 'customize') {
    $cate_type = 'customize';
} else {
    echo "type not selected";
}


/*
 * upload image files to folder
 */


// Check if user with that email already exists
$result = $db->query("SELECT * FROM items WHERE itemname='$itemname'") or die($db->error());

if ($result->num_rows > 0) { //results True
    $_SESSION['message'] = 'Product name already exists!';
    header("location: error.php");
} else {
    $item_img1 = $_FILES['file1']['name'];
    $item_img2 = $_FILES["file2"]["name"];
    $item_img3 = $_FILES["file3"]["name"];
    $item_img4 = $_FILES["file4"]["name"];

    $sql = "INSERT INTO items (itemName, itemDescription, itemimg1,itemimg2,itemimg3,itemimg4,itemPrice, itemUnits, itemDiscount, itemCategory) "
            . "VALUES ('$itemname','$itemdescr', '$item_img1','$item_img2','$item_img3','$item_img4',$itemprice,$itemunits,$itemudiscount,'$rdb_categ')";

    // Add user to the database
    if ($db->query($sql)) {
        if (isset($_POST["submit"])) {

            $fil = array("file1", "file2", "file3", "file4");
            foreach ($fil as $value) {
                if ($_FILES[$value]['size'] == 0) {
                    continue;
                    echo 'No image in ' . $value;
                } else {
                    addImgToFolder($value, $cate_type);
                }
            }
        }
        $_SESSION['message'] = 'Added product successfully!';
        header("location: success.php");
    } else {
        $_SESSION['message'] = 'Adding product failed!';
        header("location: error.php");
    }
}

function addImgToFolder($imgname, $category) {
    $target_dir = "product_img/$category/";
    $uploadOk = 1;
    $target_file = $target_dir . basename($_FILES[$imgname]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES[$imgname]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES[$imgname]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "png") {
        echo "Sorry, only PNG files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$imgname]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES[$imgname]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function resize_image($file, $w, $h, $crop=FALSE) {
    
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}

