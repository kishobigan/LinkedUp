<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/webLOgoW.jpg" type="image/x-icon"><!-- IMG of title -->
    <title>Gurulu-Profile</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"><!--metiral Icon-->
    <link rel="stylesheet" href="css/main.css"><!-- main style sheet -->
    <link rel="stylesheet" href="css/profile.css"><!-- style sheet -->
    <style>
        .middle{
            z-index: -1 !important;
        }
    </style>
</head>

<body>
    <!------------------------------------------ Navigaton bar ---------------------------------------------------------------------------->
    <nav>
        <div class="container">
            <div class="logo">
                <img src="logo/webLOgo.png" alt="GURULU_logo">
            </div>
            <div class="searchBar">
                <span class="material-icons-sharp icon-corection">manage_search</span>
                <input type="search" placeholder="Search Want to You...">
            </div>
            <div class="create">
                <label for="create-post" class="btn btn-primary">Create</label>
                <div class="profle-picture">
                    <img src="use_photo/Thimira1.png" alt="senu-propic">
                </div>
            </div>
        </div>
    </nav>

    <!------------------------------------------ Main -------------------------------------------------------------------------------------->
    <main>
        <section id="container">
            <!--=========== LEFT SECTION ===============================-->
            <div class="left">
                <a href="profile.php" class="profile">
                    <div class="profle-picture">
                        <img src="use_photo/Thimira1.png" alt="senu-propic">
                    </div>
                    <div class="handle">
                        <h4>Thimira Kalansooriya</h4>
                        <p class="text-muted">
                            @Chila_
                        </p>
                    </div>
                </a>
                <!-------------------------- Side bar ---------------------->
                <div class="sidebar">
                    <a href="home.php" class="menu-item">
                        <span class="material-icons-sharp"> home</span><h3>Home</h3>
                    </a>
                    <a class="menu-item" id="notificatiions">
                        <span class="material-icons-sharp"> notifications</span><small class="notification-counnt">9+</small><h3>Notification</h3>
                        <!--notificaton popup-->
                        <div class="notfication-popup">
                            <div>
                                <div class="profle-picture">
                                    <img src="use_photo/dvp.jpg" alt="dvp-propic">
                                </div>
                                <div class="notifcation-body">
                                    <b>dvp</b> accepted your friend request.
                                    <small>2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profle-picture">
                                    <img src="use_photo/nipuna.jpg" alt="nipuna-propic">
                                </div>
                                <div class="notifcation-body">
                                    <b>Nipunna Bandara</b> commented on your post.
                                    <small>1 HOUR AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profle-picture">
                                    <img src="use_photo/n7.jpg" alt="sirii-propic">
                                </div>
                                <div class="notifcation-body">
                                    <b>Sirya Latha</b> and <b>413 others</b> like your post.
                                    <small>4 MINITES AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profle-picture">
                                    <img src="use_photo/sasan.jpg" alt="sasan-propic">
                                </div>
                                <div class="notifcation-body">
                                    <b>Sasan Dilantha</b> comented on a post you're tagged in.
                                    <small>1 WEEK AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profle-picture">
                                    <img src="use_photo/thushar.jpg" alt="thushari-propic">
                                </div>
                                <div class="notifcation-body">
                                    <b>Thushari Senevrathne</b> commented on youre post.
                                    <small>2 MINITES AGO</small>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a href="Groups%20&%20Communities.php" class="menu-item">
                        <span class="material-icons-sharp"> groups</span><h3>Group & Community</h3>
                    </a>
                    <a href="Business.php" class="menu-item">
                        <span class="material-icons-sharp"> storefront</span><h3>Business</h3>
                    </a>
                    <a class="menu-item massages-notifications">
                        <span class="material-icons-sharp"> email</span><small class="notification-counnt">3</small><h3>Messagse</h3>
                    </a>
                    <a class="menu-item theme">
                        <span class="material-icons-sharp"> format_paint</span><h3>Theme</h3>
                    </a>
                    <a href="settings.php" class="menu-item">
                        <span class="material-icons-sharp"> settings</span><h3>Settings</h3>
                    </a>
                </div>
                <!-------------------------- End of Side bar ---------------------->
                <button for="create-post" class="btn btn-primary">Create Post</button>

            </div>

            <!--=========== MIDDLE SECTION ===============================-->
            <div class="middle">
                <!---------------- cover - senu --------------->
                <div class="feeds">
                    <div class="feed" id="d1">
                        <div class="photo" id="image">
                            <img src="use_photo/ThimiraCover.jpg" class="im1">
                        </div>
                        <div class="d2">
                            <div class="d3">
                                  <b>  Chi|@  </b>
                            </div>
                       </div>
                       <div class="d4">
                            <button type="button" class="btn btn-primary" id="b1" >
                                <span class="material-icons-sharp">
                                    photo_camera
                                    </span>
                                   Edit cover photo
                            </button>
                       </div>
                        <div>
                         <p class="p1">
                            <b>Thimira Kalansooriya ( Chi|@ )</b><br>
                            <div class="profle">
                                <img src="use_photo/Thimira1.png" class="pro1">
                            </div>
                            <small>
                                Undergraduate at UWU<br>
                                Went to Dharmaraja College Kandy<br>
                                From Kandy
                            </small>
                         </p>
                        </div>
                    </div>

                </div>

                <!-------------- End of cover --------------->
                <!-------------- create post - senu ------------------->
                <form class="create-post">
                    <div class="profle-picture">
                        <img src="use_photo/Thimira1.png">
                    </div>
                    <input type="text" name="" id="create-post" placeholder="What's on your mind, Thimira?">
                    <button type="button" class="btn btn-primary">
                        <span class="material-icons-sharp">
                            add_a_photo
                        </span>
                        <span class="btnpost">Post</span>
                    </button>

                </form>
                <!-------------- end of create post ------------------->

                <!-------------- catagorizing - senu ------------------->
                <div class="catogarize">
                    <div class="d5">
                        <a href="#"><label><span class="posts">Posts</span></label></a>
                        <a href="#"><label>About</label></a>
                        <a href="#"><label>Friend</label></a>
                        <a href="#"><label>Photos</label></a>
                        <a href="#"><label>Videos</label></a>
                        <a href="#"><label>More</label></a>
                    </div>
                </div>

                <!-------------- Feeds ------------------->
                <div class="feeds">
                    <!-------------- Feed-1 ------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profle-picture">
                                    <img src="use_photo/Thimira1.png">
                                </div>
                                <div class="info">
                                    <h3>Thimira Kalansooriya</h3>
                                    <small>Muruthawela in Sri Lanka , June 30,2023</small>
                                </div>
                            </div>
                            <span class="edit">
                                <span class="material-icons-sharp">more_horiz</span>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="use_photo/Thimira2.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="nteraction-buttons">
                                <span><span class="material-icons-sharp">favorite_borderr</span></span>
                                <span><span class="material-icons-sharp">chat_bubble_outline</span></span>
                                <span><span class="material-icons-sharp">share</span></span>
                            </div>
                            <div class="bookmarck">
                                <span><span class="material-icons-sharp">bookmark_border</span></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="use_photo/dvp.jpg" alt=""></span>
                            <span><img src="use_photo/sasan.jpg" alt=""></span>
                            <span><img src="use_photo/nipuna.jpg" alt=""></span>
                            <p>Liked by <b>Nipuna Bandara</b> and <b>2,323 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Chila_</b> Thrill the life <span class="hash-tag">#lfeStyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 386 comments</div>

                    </div>

                    <!-------------- Feed-2 ------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profle-picture">
                                    <img src="use_photo/Thimira1.png">
                                </div>
                                <div class="info">
                                    <h3>Thimira Kalansooriya</h3>
                                    <small>At Kalani University Gym #unigames , June 25,2023</small>
                                </div>
                            </div>
                            <span class="edit">
                                <span class="material-icons-sharp">more_horiz</span>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="use_photo/Thimira3.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="nteraction-buttons">
                                <span><span class="material-icons-sharp">favorite_borderr</span></span>
                                <span><span class="material-icons-sharp">chat_bubble_outline</span></span>
                                <span><span class="material-icons-sharp">share</span></span>
                            </div>
                            <div class="bookmarck">
                                <span><span class="material-icons-sharp">bookmark_border</span></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="use_photo/dvp.jpg" alt=""></span>
                            <span><img src="use_photo/sasan.jpg" alt=""></span>
                            <span><img src="use_photo/nipuna.jpg" alt=""></span>
                            <p>Liked by <b>Nipuna Bandara</b> and <b>3,563 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Chila_</b> Find your way.. <span class="hash-tag">#unigames #sports #badminton</span></p>
                        </div>
                        <div class="comments text-muted">View all 264 comments</div>

                    </div>

                     <!-------------- Feed-3 ------------------->
                     <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profle-picture">
                                    <img src="use_photo/Thimira1.png">
                                </div>
                                <div class="info">
                                    <h3>Thimira Kalansooriya</h3>
                                    <small>Updated his cover picture , June 24,2023</small>
                                </div>
                            </div>
                            <span class="edit">
                                <span class="material-icons-sharp">more_horiz</span>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="use_photo/ThimiraCover.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="nteraction-buttons">
                                <span><span class="material-icons-sharp">favorite_borderr</span></span>
                                <span><span class="material-icons-sharp">chat_bubble_outline</span></span>
                                <span><span class="material-icons-sharp">share</span></span>
                            </div>
                            <div class="bookmarck">
                                <span><span class="material-icons-sharp">bookmark_border</span></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="use_photo/dvp.jpg" alt=""></span>
                            <span><img src="use_photo/sasan.jpg" alt=""></span>
                            <span><img src="use_photo/nipuna.jpg" alt=""></span>
                            <p>Liked by <b>Nipuna Bandara</b> and <b>1,533 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Chila_</b> Nothing more than yourself <span class="hash-tag">#lfeStyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>

                    </div>
                     <!-------------- Feed-4 ------------------->
                     <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profle-picture">
                                    <img src="use_photo/Thimira1.png">
                                </div>
                                <div class="info">
                                    <h3>Thimira Kalansooriya</h3>
                                    <small>#colombo meetup #unifam , June 03,2023</small>
                                </div>
                            </div>
                            <span class="edit">
                                <span class="material-icons-sharp">more_horiz</span>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="use_photo/f1.jpg">
                        </div>
                        <div class="action-buttons">
                            <div class="nteraction-buttons">
                                <span><span class="material-icons-sharp">favorite_borderr</span></span>
                                <span><span class="material-icons-sharp">chat_bubble_outline</span></span>
                                <span><span class="material-icons-sharp">share</span></span>
                            </div>
                            <div class="bookmarck">
                                <span><span class="material-icons-sharp">bookmark_border</span></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="use_photo/dvp.jpg" alt=""></span>
                            <span><img src="use_photo/sasan.jpg" alt=""></span>
                            <span><img src="use_photo/nipuna.jpg" alt=""></span>
                            <p>Liked by <b>Nipuna Bandara</b> and <b>2,323 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Chila_</b> Bromence❤️<span class="hash-tag">#lfeStyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 1794 comments</div>

                    </div>
                     <!-------------- Feed-5 ------------------->
                     <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profle-picture">
                                    <img src="use_photo/Thimira1.png">
                                </div>
                                <div class="info">
                                    <h3>Thimira Kalansooriya</h3>
                                    <small>Updated his profile picture , May 19,2023</small>
                                </div>
                            </div>
                            <span class="edit">
                                <span class="material-icons-sharp">more_horiz</span>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="use_photo/Thimira1.png">
                        </div>
                        <div class="action-buttons">
                            <div class="nteraction-buttons">
                                <span><span class="material-icons-sharp">favorite_borderr</span></span>
                                <span><span class="material-icons-sharp">chat_bubble_outline</span></span>
                                <span><span class="material-icons-sharp">share</span></span>
                            </div>
                            <div class="bookmarck">
                                <span><span class="material-icons-sharp">bookmark_border</span></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="use_photo/dvp.jpg" alt=""></span>
                            <span><img src="use_photo/sasan.jpg" alt=""></span>
                            <span><img src="use_photo/nipuna.jpg" alt=""></span>
                            <p>Liked by <b>Nipuna Bandara</b> and <b>8,323 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Chila_</b> Happiness <span class="hash-tag">#lfeStyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 367 comments</div>

                    </div>

                </div>

            </div>

            <!--=========== RIGHT SECTION ===============================-->


            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Recent</h4><span class="material-icons-sharp">drive_file_rename_outline</span>
                    </div>
                    
                    <div class="searchBar">
                        <span class="material-icons-sharp icon-corection">search</span>
                        <input type="search" id="message-search" placeholder="Search messages">

                    </div>
                    
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>Genaral</h6>
                        <h6 class="message-requests">Request(9)</h6>
                    </div>
                    
                    <div class="message">
                        <div class="profle-picture">
                            <img src="use_photo/nipuna.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Nipuna Bandara</h5>
                            <p class="text-muted">Just woke up brush</p>
                        </div>
                    </div>
                    
                    <div class="message">
                        <div class="profle-picture">
                            <img src="use_photo/thushar.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Thushari Senevirathne</h5>
                            <p class="text-bold">2 new message</p>
                        </div>
                    </div>
                    
                    <div class="message">
                        <div class="profle-picture">
                            <img src="use_photo/dvp.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>DVP</h5>
                            <p class="text-bold">Happy Birthday</p>
                        </div>
                    </div>
                    
                    <div class="message">
                        <div class="profle-picture">
                            <img src="use_photo/sasan.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Sasan Dillantha</h5>
                            <p class="text-muted">What are you doing now.</p>
                        </div>
                    </div>
                    
                    <div class="message">
                        <div class="profle-picture">
                            <img src="use_photo/isuru.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Isuru Widana Pathiirana</h5>
                            <p class="text-bold">ok</p>
                        </div>
                    </div>
                </div> 



                <!---------------- End of Message ------------------>

                <!---------------- Friend Requests ------------------>
                <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profle-picture">
                                <img src="use_photo/dvp.jpg">
                            </div>
                            <div>
                                <h5>DVP</h5>
                                <p class="text-muted">
                                    6 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profle-picture">
                                <img src="use_photo/sasan.jpg">
                            </div>
                            <div>
                                <h5>DS</h5>
                                <p class="text-muted">
                                    2 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profle-picture">
                                <img src="use_photo/nipuna.jpg">
                            </div>
                            <div>
                                <h5>Desh</h5>
                                <p class="text-muted">
                                    25 mutual friends
                                </p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">
                                Accept
                            </button>
                            <button class="btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--=========== Theme Customizatiion ===============================-->
    <div class="custermize-theme">
        <div class="card">
            <div class="close">
                <span class="material-icons-sharp">close </span>
            </div>
            <h2>Customize yore view</h2>
            <p class="text-muted">Mannage your font size, color and background</p>
            <!--------------------- Font Size --------------------------->
            <div class="font-size">
                <h4>Font size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>
            <!--------------------- Primary color --------------------------->
            <div class="color">
                <h4>color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>
            <!--------------------- Background color --------------------------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg-color">
                    <div class="bg-color-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-color-2">
                        <span></span>
                        <h5 for="bg-2">Mddle</h5>
                    </div>
                    <div class="bg-color-3">
                        <span></span>
                        <h5 for="bg-3">Darck</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
