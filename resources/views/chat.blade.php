<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>

    <style>
        body {
          font-family: "Lato", sans-serif;
        }

        .wholeContainer {
            width: 100%;
        }
        .sidenav {
          height: 100%;
          width: 20%;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #8D5524;
          padding-top: 20px;
        }
        
        .sidenav a {
          padding: 8px 0px 5px 50px;
          text-decoration: none;
          font-size: 1.2vw;
          color: white;
          display: block;
        }
        
        .sidenav a:hover {
            color: #8D5524;
            background-color: #b9c2c4;
        }
        .chatContent {
            width: 80%;
            height: 100%;
            margin-left: 20%;
            position: fixed;
        }

        #logout {
            float: right;
            margin-top: -1.5%;
            font-size: 1.1vw;
            background-color: #b9c2c4;
        }
    
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }

        #ch1 {
            background-color: #b9c2c4;
            position: absolute;
            border-style: ridge;
            width: 30%;
            height: 100%;
        }

        .dot {
            height: 10px;
            width: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .list-group{
            background-color: rgb(199, 199, 199); 
        }

        .verticalDot {
            float: right;
        }

        .plusIcon {
            float: right;
            margin-right: 4%;
        }

        label {
            margin: 0;
        }
        .userIcon {
            margin-left: 32%;
            margin-right: 32%;
            color: white;
        }
        /**/
        .chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		
		.msg_card_body{
			overflow-y: auto;
            height: 70%;
            margin-left: 30%;
            width: 72%;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
        .card-footer{
            border-top: 0 !important;
            width: 100%;
            background-color: transparent;
        }
        .type_msg{
            background-color: #b9c2c4 !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
            margin-left: 35%;
            
        }
        .type_msg:focus{
            box-shadow:none !important;
            outline:0px !important;
        }
        .send_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: #b9c2c4 !important;
            border:0 !important;
            color: #7b8a88 !important;
            cursor: pointer;
        }
        .active{
                background-color: rgba(0,0,0,0.3);
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;
            
        }
        .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa; 
        }
        .img_cont{
            position: relative;
            height: 70px;
            width: 70px;
        }
        .img_cont_msg{
            height: 40px;
            width: 40px;
        }
        .online_icon{
            position: absolute;
            height: 15px;
            width:15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border:1.5px solid white;
        }
            .offline{
                background-color: #c23616 !important;
            }
            
            .video_cam{
                margin-left: 50%;
                margin-top: 2%;
            }
            .video_cam span{
                color: black;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }
            .msg_cotainer{
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #bd8f6a;
                padding: 10px;
                position: relative;
            }
            .msg_cotainer_send{
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #b9c2c4;
                color:black;
                padding: 10px;
                position: relative;
            }
            .msg_time{
                position: absolute;
                left: 0;
                bottom: -15px;
                color: black;
                font-size: 10px;
            }
            .msg_time_send{
                position: absolute;
                right:0;
                bottom: -15px;
                color: black;
                font-size: 10px;
            }
            .msg_head{
                position: relative;
                margin-left: 35%;
                background-color: white;
            }
            .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
            }
            .user_info span{
                font-size: 20px;
                color: black;
            }
            .user_info p{
            font-size: 10px;
            color: black;
            }
    </style>
</head>
<body>
    <div class="wholeContainer">
        <div id="Sidenav" class="sidenav">
            <div class="userIcon mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </div>
            <p class="text-center text-white font-weight-bold">RIZA TITAR</p>

            <div class="input-group w-100 p-3" id="search">
                <input type="search" class="form-control border-right-0" id="search" placeholder="Search" aria-label="Search"aria-describedby="search-addon" />
                <div class="input-group-prepend">
                    <span class="input-group-text border-left-0" id="searchIcon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></span>
                </div>
            </div>

            <div>
            <p class="ml-4 font-weight-bold">APPS</p>
                    <a href="{{ config('app.url')}}/userdashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                      </svg> Home</a>
                    <a href="{{ config('app.url')}}/project"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                    </svg> Project</a>
                    <a href="{{ config('app.url')}}/drive"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                      </svg> Drive</a>
                    <a href="{{ config('app.url')}}/chat"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                    </svg> Chat</a>
                    <a href="{{ config('app.url')}}/team"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg> Team</a>
                    <a href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg> Logout</a>
                
                    <p class="ml-4 mt-5">PROJECTS</p>
                    <a href="#">Workkit</a>
                    <a href="#">CodeTisans</a>
            </div>
        </div>

        <div class="chatContent">
            <div class="row w-100">
                <div class="col p-0" id="ch1">
                    <div class="input-group w-100 p-4 ml-2" id="">
                        <input type="search" class="form-control border-right-0" placeholder="Search" aria-label="Search"aria-describedby="search-addon" />
                        <div class="input-group-prepend">
                            <span class="input-group-text border-left-0" id="searchIcon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg></span>
                        </div>
                    </div>

                    <div>
                        <div class="">
                            <p class="ml-4">CONVERSATIONS<span class="plusIcon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></span></p>
                            
                        </div>

                        <div class="">
                            <ul class="list-group w-100">
                                <li class="list-group-item"><span class="dot"></span>
                                    <label class="ml-2" id="nameList"> Riza Titar</label>
                                    <span class="verticalDot"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg></span>
                                </li>
                                <li class="list-group-item"><span class="dot"></span>
                                    <label class="ml-2" id="nameList"> Sheryl Kate Monserrat</label>
                                    <span class="verticalDot"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg></span>
                                </li>
                                <li class="list-group-item"><span class="dot"></span>
                                    <label class="ml-2" id="nameList"> Nathalie Butic</label>
                                    <span class="verticalDot"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Riza Titar</span>
                                <p>1767 Messages</p>
                            </div>
                            <div class="video_cam">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                        
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                        
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <span class="input-group-text send_btn"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                  </svg></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>