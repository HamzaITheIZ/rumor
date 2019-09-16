<?php
include_once("../database/constants.php");
include_once("user.php");
include_once("DBOperation.php");
include_once("Manage.php");

//For Registration Processsing
if (isset($_POST["username"]) AND isset($_POST["email"])) {
    $user = new User();
    $result = $user->createUserAccount($_POST["username"], $_POST["email"], $_POST["password1"]);
    echo $result;
    exit();
}
//For Login Processing
if (isset($_POST["log_email"]) AND isset($_POST["log_password"])) {
    $user = new User();
    $result = $user->userLogin($_POST["log_email"], $_POST["log_password"]);
    echo $result;
    exit();
}
if (isset($_POST["rumor_type"])) {
    $file = $_FILES["file"];

    $filename = $_FILES["file"]['name'];
    $fileTmpName = $_FILES["file"]['tmp_name'];
    $fileSize = $_FILES["file"]['size'];
    $fileError = $_FILES["file"]['error'];
    $fileType = $_FILES["file"]['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $destination_path = $_SERVER['DOCUMENT_ROOT'];
                $fileNameNew = uniqid('', TRUE) . "." . $fileActualExt;
                $fileDestination = $destination_path . "/Icha3a/public_html/images/" . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $dbo = new DBOperation();
                $result = $dbo->addRumor($_POST["Admin_name"], $_POST["rumor_date"], $_POST["rumor_type"], $_POST["title"], $_POST["article"], $fileNameNew);
                echo $result;
                exit();
            } else {
                echo 'Your File is much bigger than the maximum size!';
                exit();
            }
        } else {
            echo 'there was an error uploading your file!';
            exit();
        }
    } else {
        echo "you cannout upload files of that type!";
        exit();
    }
}
//Fetch Rumors
if (isset($_POST["rumors_info"])) {
    $m = new Manage();
    $result = $m->consultRumors();
    $rows = $result["rows"];
    if (count($rows) > 0) {
        $n = 1;
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><img style="border-radius: 50%;" src="images/<?php echo $row["image"]; ?>" height="50" width="50"</td>
                <td><?php echo $row["admin"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["article"]; ?></td>
                <td>
                    <a href="#" did="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm del_rumor"><i class="fa fa-trash-alt">&nbsp;</i>Delete</a>
                    <a href="#" eid="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#form_update_rumors" class="btn btn-info btn-sm edit_rumor"><i class="fa fa-pencil-alt">&nbsp;</i>Edit</a>
                </td>
            </tr>
            <?php
            $n++;
        }
        ?>
        <?php
        exit();
    }
}
//Delete Rumor
if (isset($_POST["deleteRumor"])) {
    $m = new Manage();
    $result = $m->deleteRecord("rumor", "id", $_POST["id"]);
    echo $result;
}


//Set Rumor
if (isset($_POST["updateRumor"])) {
    $m = new Manage();
    $result = $m->getSingleRecord("rumor", "id", $_POST["id"]);
    echo json_encode($result);
    exit();
}
//Update Record after getting data
if (isset($_POST["select_Type"])) {
    $m = new Manage();
    $id = $_POST["id"];
    $admin = $_POST["admin"];
    $date = $_POST["date"];
    $type = $_POST["select_Type"];
    $title = $_POST["title"];
    $article = $_POST["article"];

    $result = $m->update_record("rumor", ["id" => $id], ["admin" => $admin, "date" => $date, "title" => $title,"article" => $article]);
    echo $result;
}
//Delere Rumor
if(isset($_POST["deleteRumor"])){
    $m = new Manage();
    $result = $m->deleteRecord('rumor', 'id', $_POST["id"]);
    echo $result;
}
