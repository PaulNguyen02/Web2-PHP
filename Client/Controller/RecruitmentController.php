<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php
    class RecruitmentController extends BaseController
    {
        private $jobs;
        function __construct()
        {
            $this->model('RecruitmentModel');
            $this->jobs = new RecruitmentModel();
        }
        function show()
        {                     
            $joblist = $this->jobs->show();
            return $this->view('recruitment', ['joblist' => $joblist]);
        }
        function register()
        {
            $joblist = array();
            $name=null; $email=null; $role=null; $address=null; $birth=null; $phonenumber=null; $date=null;
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['address']) && isset($_POST['birth']) && isset($_POST['phone']) && isset($_POST['date']))
            {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    $address = $_POST['address'];
                    $birth = $_POST['birth'];
                    $phonenumber = $_POST['phone']; 
                    $date  = $_POST['date'];
                    array_push($joblist, $name, $email ,$role, $address, $birth, $phonenumber, $email, $date);
                    $this->jobs->register($joblist);
            }
            if(isset($_POST["sent"]))
            {
                if (isset($_FILES['upload'])) {
                    switch ($_FILES['upload']["error"]) {
                        case UPLOAD_ERR_OK:
                            $target = "C:/xampp/htdocs/motoserv/UploadedFiles/";
                            $target = $target . basename($_FILES['upload']['name']);
        
                            if (move_uploaded_file($_FILES['upload']['tmp_name'], $target)) {
                                //$status = "The file " . basename($_FILES['upload']['name']) . " has been uploaded";
                                $imageFileType = pathinfo($target, PATHINFO_EXTENSION);
                                $check = getimagesize($target);                   
                                $uploadOk = 1;
                            } else {
                                //$status = "Sorry, there was a problem uploading your file.";
                            }
                            break;
                    }
                    echo '
                            <div class="notification">
                                <span> Đã gửi thông tin tuyển dụng đến nhà tuyển dụng</span>
                                <div class="mt-2 d-flex align-items-center justify-content-center g-2">   
                                <button id="ok" class="ok-button">OK</button>
                                <script>
                                    $("#ok").click(function (){
                                        $(".notification").hide();
                                    })
                                </script>   
                                </div>          
                            </div>
                            <style>
                                .notification{
                                    position: fixed;
                                    top: 50%;
                                    left:40%;
                                    width: 300px;
                                    padding-top: 7px;
                                    height: 80px;
                                    color: #fff;
                                    
                                    line-height: 20px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    font-size: 14px;
                                    background: #292929;
                                    z-index: 120;
                                    cursor: pointer;
                                    border-radius: 3px;
                                    }
                                    
                                    .ok-button{
                                        height: 20px;
                                        width: 80px;
                                        color: #fff;
                                        font-size: 12px;
                                        line-height: 10px;
                                        border-radius: 3px;
                                        border: 1px solid #006eb7;
                                        background-color: #006eb7;
                                    }
                            </style>
                            ';
                }
                
            }
            return $this->view('home');
        }
    }