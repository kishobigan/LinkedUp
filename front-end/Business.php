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
    <link rel="stylesheet" href="css/business.css"><!-- style sheet -->
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
                    <a href="Groups & Communities.php" class="menu-item">
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

                <div class="header">
                    <img src="logo/New logo.jpg"class="logo ">
                    <img src="logo/New logo word.png" class="word" >
                </div>

                <!-------------- Feeds ------------------->
                <div class="feeds">
                    <!-------------- Newly Added Items ------------------->
                    <div class="feed">


                        <div class="photo">
                            <div class="gallery">
                                <a target="_blank" href="Products images/M6 smart band.jpeg">
                                  <img src="Products images/M6 smart band.jpeg" alt="M6 smart band" width="500" height="500">
                                </a>
                                <div class="desc"><a href="#">M6 Smart Band</a></div>
                                <div class="price">Rs. 1,799</div>
                            </div>
                            <div class="gallery">
                               <a target="_blank" href="Products images/Airpods.jpg">
                                 <img src="Products images/Airpods.jpg" alt="Airpods Pro Black" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Airpods Pro</a></div>
                               <div class="price">Rs. 4850</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Electric kettle.jpg">
                                 <img src="Products images/Electric kettle.jpg" alt="Electric kettle" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Electric kettle</a></div>
                               <div class="price">Rs. 1,990 </div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Bluetooth Speaker.jpg">
                                 <img src="Products images/Bluetooth Speaker.jpg" alt="Bluetooth Speaker" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Bluetooth Speaker</a></div>
                               <div class="price">Rs. 3990 </div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Alpha arbutin.jpg">
                                 <img src="Products images/Alpha arbutin.jpg" alt="Alpha arbutin" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Alpha Arbutin 3+</a></div>
                               <div class="price">Rs. 1690</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Tool Kit.jpg">
                                 <img src="Products images/Tool Kit.jpg" alt="Tool Kit" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Tool Kit</a></div>
                               <div class="price">Rs. 990</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Hair Straightener.jpg">
                                 <img src="Products images/Hair Straightener.jpg" alt="Hair Straightener" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Hair Straightener</a></div>
                               <div class="price">Rs. 1799</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Solar Light.jpg">
                                 <img src="Products images/Solar Light.jpg" alt="Solar Light" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Solar Light</a></div>
                               <div class="price">Rs. 1190</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/3D Moon Light.jpeg">
                                 <img src="Products images/3D Moon Light.jpeg" alt="3D Moon Light" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">3D Moon Light</a></div>
                               <div class="price">Rs. 1990</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Mobile Tovel Rack.jpg">
                                 <img src="Products images/Mobile Tovel Rack.jpg" alt="Mobile Tovel Rack" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Mobile Tovel Rack</a></div>
                               <div class="price">Rs. 2,250</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Laptop Bed Table.jpg">
                                 <img src="Products images/Laptop Bed Table.jpg" alt="Laptop Bed Table" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Laptop Bed Table</a></div>
                               <div class="price">Rs. 3200</div>
                           </div>
                           <div class="gallery">
                               <a target="_blank" href="Products images/Amazing Shoe Rack.jpg">
                                 <img src="Products images/Amazing Shoe Rack.jpg" alt="Amazing Shoe Rack" width="500" height="500">
                               </a>
                               <div class="desc"><a href="#">Shoe Rack</a></div>
                               <div class="price">Rs. 1900</div>
                           </div>


                        </div>


                    </div>

                     <!-------------- Newly Added Items End ------------------->


                    <!-------------- Newly Added Next button ------------------->

                     <button class="button" style="vertical-align:middle"><span>Next Page </span></button>

                    <!-------------- Newly Added Next button end------------------->

                </div>



            </div>



            <!--=========== RIGHT SECTION ===============================-->
            <div class="right">
                <div class="messages">
                    <div class="heading">

                        <!-------------- Newly Added  horizontal nav bar------------------->

                        <div class="horizontalnav">

                           <ul>
                            <li><a class="active" id="buy" href="#Buy Items">Buy Items</a></li>
                            <li><a class="sell_act" id="sell" href="#Sell Items">Sell Items</a></li>
                          </ul>
                        </div>

                        <!-------------- Newly Added  horizontal nav bar end------------------->

                    </div>
                    <!----------------  Search bar ------------------>
                    <div class="searchBar">
                        <span class="material-icons-sharp icon-corection">search</span>
                        <input type="search" id="message-search" placeholder="Search Items">
                    </div>

                    <div class="ctgrtopic">
                        <h4>Categories <span class="material-icons-sharp">format_list_bulleted</span></h4>
                        </div>
                    <!---------------- Newly Added categories nav bar------------------>
                    <div class="categories">
                        <ul>
                           <li><a id="activectgr" href="#"><span class="material-icons-sharp">category</span>All</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">checkroom</span> Fashion </a></li>

                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">phone_android</span>Electronics</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">directions_car</span>Vehicles</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">diamond</span>Jewellery</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">real_estate_agent</span>Properties</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">event_seat</span>Furniture</a></li>
                           <li><a id="ctgr" href="#"><span class="material-icons-sharp">expand_more</span>Others</a></li>
                        </ul>
                   </div>
                </div>
                <!----------------Newly Added categories nav bar end ------------------>

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
