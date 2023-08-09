<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/webLOgoW.jpg" type="image/x-icon"><!-- IMG of title -->
    <title>GURULU Business</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"><!--metiral Icon-->
    <link rel="stylesheet" href="css/main.css"><!-- main style sheet -->
    <link rel="stylesheet" href="css/settigs.css"><!-- style sheet -->
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

                <!-------------- Feeds ------------------->
                <div class="feeds">
                    <!-------------- settings ------------------->
                    <div class="feed">

                       <div class="topics">
                        <h1>General Account Setting</h1>
                       </div>
                       <div class="mainline"><hr> </div>
                       <div class="stopic">
                         <li><span class="sdetails" >Name</span> <span class="tab1"> Senura Adithya</span><span class="material-icons-sharp">edit_note</span></li>
                         <div class="midline"><hr> </div>
                         <li><span class="sdetails">Username</span><span class="tab2"> You have to set a username</span><span class="material-icons-sharp">edit_note</span></li>
                         <div class="midline"><hr> </div>
                         <li><span class="sdetails">Contact</span><span class="tab3"> Primary</span><span class="material-icons-sharp">edit_note</span></li>
                         <div class="midline"><hr> </div>
                         <li><span class="sdetails">Ad account contact</span><span class="tab4">senuadithya2gmail.com</span><span class="material-icons-sharp">edit_note</span></li>
                         <div class="midline"><hr> </div>
                         <li><span class="sdetails">Memorialization Settings</span><span class="tab5">Decide what happen to your account after you pass away.</span><span class="material-icons-sharp">edit_note</span></li>
                         <div class="midline"><hr> </div>



                       </div>

                    </div>
                     <!-------------- settings End ------------------->

                </div>

            </div>

            <!--=========== RIGHT SECTION ===============================-->
            <div class="right">
                <div class="messages">

                    <!----------------  Search bar ------------------>
                    <div class="searchBar">
                        <span class="material-icons-sharp icon-corection">search</span>
                        <input type="search" id="message-search" placeholder="Settings & Privacy">
                    </div>

                    <div class="ctgrtopic">
                        <h3>Settings</h3>
                        </div>
                    <!---------------- categories nav bar------------------>
                    <div class="categories">
                        <ul>
                            <li><a id="activectgr" href="#"><span class="material-icons-sharp">settings</span>Genaral</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">security</span>Security and Login</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">feed</span>Your facebook information</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">lock</span>Privacy</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">block</span>Blocking</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp"> local_offer</span>Profile and Tagging</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">auto_stories</span>Stories</a></li>
                            <li><a id="ctgr" href="#"><span class="material-icons-sharp">language</span>Language and Region</a></li>

                        </ul>
                   </div>
                </div>
                <!---------------- End of categories nav bar ------------------>

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
