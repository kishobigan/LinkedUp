<!-- Type doc and hit tab ;)-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="logo/webLOgoW.jpg" type="image/x-icon"><!-- IMG of title -->
        <title>Groups and Communities</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"><!--metiral Icon-->
        <link rel="stylesheet" href="css/main.css"><!-- style sheet -->

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"><!--Outlined Icon-->
        <link rel ="stylesheet" href="css/groups-style.css"> <!-- Groups Style sheet. Just for testing-->

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

                <div class="middle">
                    <!--------------------------------------------------------------------- Suggested --------------------------------------------------------------->
                    <div class = "suggest-people">
                        <p>SUGGESTED</p>
                        <ul class = "suggested-people-list">
                            <li><a href="#"><img src = "use_photo/salu.jpeg" alt= "suggested-salu" class = "profle-picture"></a></li>
                            <li><a href="#"><img src = "use_photo/sithija.jpg" alt="suggested-sithija" class = "profle-picture"></a></li>
                            <li><a href="#"><img src = "use_photo/dvp.jpg" alt="suggested-dvp" class = "profle-picture"></a></li>
                        </ul>
                    </div>
                    <!----------------------------------------------------------------- End of Suggested ------------------------------------------------------------->
                    <!-------------------------------------------------------------- Personal Chats ------------------------------------------------------------------>
                    <button class="new-chat" type="submit">
                            <span class="material-icons-outlined" style="margin-left: 0.3rem; margin-top: 0.3rem; color: var(--color-white);">chat</span>
                    </button>

                    <div class = "personal-chats">
                        <h4 style="font-size: 0.7rem; letter-spacing: 0.05rem;">PERSONAL CHATS</h4>
                        <div class = "chat">
                                <a href="#"><img src = "use_photo/salu.jpeg" alt="Pro-Pic salu" class="profle-picture"></a>
                                <h5>Sasikumar Salujan</h5>
                                <p>Are you free now? i want to get meeting</p>
                        </div>

                        <div class = "chat">
                            <a href="#"><img src = "use_photo/sithija.jpg" alt="Pro-Pic sithija" class="profle-picture"></a>
                            <h5>Sithija Deshan</h5>
                            <b><p>Me ara Business ekata monw hari krmu.</p></b>
                            <span>2</span>
                        </div>

                        <div class = "chat">
                            <a href="#"><img src = "use_photo/kishobigan.jpeg" alt="Pro-Pic kishobigan"  class="profle-picture"></a>
                            <h5>Karunairasa Kishobigan</h5>
                            <p>I will come. wait bro</p>
                        </div>

                        <div class = "chat">
                            <a href="#"><img src = "use_photo/adam.jpg" alt="adam" class="profle-picture"></a>
                            <h5>Adam Stokes</h5>
                            <b><p>Are you free now?</p></b>
                            <span>1</span>
                        </div>

                        <div class = "chat">
                            <a href = "#"><img src = "use_photo/dvp.jpg" class="profle-picture"></a>
                            <h5>Isuru Dhananjaya</h5>
                            <p>Bit Coin eka adu wela</p>
                        </div>

                        <div class = "chat">
                            <a href="#"><img src = "use_photo/feed1.jpg" class="profle-picture"></a>
                            <h5>Dilshan Kavindra</h5>
                            <p>Sale ekak tynw yamuda?</p>
                        </div>

                    </div>
                    <!----------------------------------------------------------- End of Personal Chats -------------------------------------------------------------->

                    <!-------------------------------------------------------------- Group Chats --------------------------------------------------------------------->
                    <button type="submit" class="new-chat2">
                        <span class="material-icons-outlined" style="margin-left: 0.3rem; margin-top: 0.3rem; color: var(--color-white);">chat</span>
                    </button>

                    <div class = "group-chats">
                        <h4 style="font-size: 0.7rem; letter-spacing: 0.05rem;">GROUP CHATS</h4>
                        <div class = "chat">
                                <a href="#"><img src = "use_photo/uwu.PNG" alt="UWU" class="profle-picture"></a>
                                <h5>CST Uva Wellassa</h5>
                                <p>We have a assignment due tonight</p>
                        </div>
                        <div class = "chat">
                            <a href="#"><img src = "use_photo/bitcoin.jpg" alt="bitcoin" class="profle-picture"></a>
                            <h5>Bitcoin Sl</h5>
                            <b><p>Trade krnna epa danmama!!</p></b>
                            <span>2</span>
                        </div>
                        <div class = "chat">
                            <a href="#"><img src = "use_photo/cod.jpg" alt="COD"  class="profle-picture"></a>
                            <h5>Republic of COD Gamers</h5>
                            <p>There will be tourament on sunday</p>
                        </div>
                        <div class = "chat">
                            <a href="#"><img src = "use_photo/coding.jpeg" alt="Programming" class="profle-picture"></a>
                            <h5>Programming HUB</h5>
                            <p>What's the difference between a struct and an array?</p>
                        </div>
                        <div class = "chat">
                            <a href = "#"><img src = "use_photo/bsiness.jpg" alt="business" class="profle-picture"></a>
                            <h5>Business Sri Lanka</h5>
                            <b><p>[Photo]</p></b>
                            <span>5</span>
                        </div>
                        <div class = "chat">
                            <a href="#"><img src = "use_photo/travel.jpg" alt="Travel" class="profle-picture"></a>
                            <h5>Travellers' Union</h5>
                            <p>I want to van for hire!!</p>
                        </div>
                    </div>
                    <!----------------------------------------------------------- End of Group Chats -------------------------------------------------------------->
                </div>

                <!---------------------------------------------------------------- Suggested Groups --------------------------------------------------------------->
                <div class="right">
                    <div class="suggested-communities">
                        <h5>Suggested Groups for You</h5><br>

                        <div class = "community-table">
                            <div class = "community-left">
                                <h4>Online Entrepenuers' Guild</h4>
                                <p>3K+ Members</p>
                            </div>

                            <div class = "community-right">
                                <button type="submit" class="btn-join">Join</button>
                            </div>
                            <br><br>

                            <div class = "community-left">
                                <h4>IEEE Student Branch of Uva Wellassa University</h4>
                                <p>200+ Members</p>
                            </div>

                            <div class = "community-right">
                                <button type="submit" class="btn-join" style="margin-top: -1rem;">Join</button>
                            </div>
                            <br><br><br>

                            <div class = "community-left">
                                <h4>Born in Galle</h4>
                                <p>1K+ Members</p>
                            </div>

                            <div class = "community-right">
                                <button type="submit" class="btn-join">Join</button>
                            </div>
                            <br><br>

                            <div class = "community-left">
                                <h4>Tesla</h4>
                                <p>100K+ Members</p>
                            </div>

                            <div class = "community-right">
                                <button type="submit" class="btn-join">Join</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <!---------------------------------------- End of Suggested Groups --------------------------------------------------------------------------->

                    <!----------------------------------------------- Trending Stories --------------------------------------------------------------------------->
                    <div class="trending-stories">
                        <h5>Trending Stories from Your Groups</h5><br>

                        <div class = "trending-table">
                            <a href="#">
                                <h4>#Promoting Sri Lankan Spices</h4>
                                <p>Online Entrepenuers' Guild</p>
                            </a>
                            <br><br>

                            <a href="#">
                                <h4>#Soft Robotics for Space Exploration</h4>
                                <p>IEEE Student Branch of Uva Wellassa University</p>
                            </a>
                            <br><br>

                            <a href="#">
                                <h4>#Electronics Group Discussion</h4>
                                <p>CST Uva Wellassa</p>
                            </a>
                            <br><br>

                            <a href="#">
                                <h4>#COD Records</h4>
                                <p>Repbulic of COD Gamers</p>
                            </a>
                            <br>

                        </div>
                    </div>
                    <!------------------------------------------- End of Trending Stories ------------------------------------------------------------------------>
                </div>
            </section>
        </main>

        <!--=========== Theme Customizatiion ===============================-->
        <div class="custermize-theme">
            <div class="card">
                <div class="close">
                    <span class="material-icons-sharp" onclick="closeTheme();">close </span>
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
        <script src="js/theme.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
