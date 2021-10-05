<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now</title>
    <link rel='shortcut icon' type='image/x-icon' href="assets/images/favicon.ico">
    <!-- google fonts cdn link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,600&family=Poppins:wght@300;400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <!-- flaticon link -->
    <link rel="stylesheet" href="assets/flaticon/font/flaticon.css">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstarp css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- carrier css link -->
    <link rel="stylesheet" href="assets/css/carrier.css">

    <!-- apply css link -->
    <link rel="stylesheet" href="assets/css/apply.css">
</head>

<body>
    <?php include_once "inc/header.php"; ?>
    <!--============== CARRIER-BANNER START =============== -->

    <section id="carrier-banner" class="pt-300 mb-100">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-md-12 col-lg-7">
                    <div class="carrier-heading ">
                        <h1 class="text-center mt-80 text-white c-heading">Connect to Nap Tech Labs</h1>
                    </div>
                </div>
            </div>
    </section>

    <!--============== CARRIER-BANNER END =============== -->

    <!-- ================= APPLY NOW START============================= -->

    <section id="apply-now" class="mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <p style="color: #000; font-size: 30px; text-align: left;"><strong>Job Title : UI/UX
                            Designer<br />
                        </strong></p>
                    <div class="status"></div>
                    <form class="submit-form-data ptb30 form-area" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="name" class="general_input italic input-field" placeholder="Full name" name="name" required>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="email" id="email" class="general_input italic input-field" placeholder="Email address" name="email" required>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="phone" class="general_input italic input-field" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="subject" class="general_input italic input-field" placeholder="Subject" name="subject">
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <select id="position" class="general_input italic input-field" name="position">
                                    <option value="apply-for">Apply For</option>
                                    <option value="job">Job</option>
                                    <option value="intern">Intern</option>
                                </select>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="file" id="cv" class="general_input italic hidden input-field" name="cv" onchange="pressed()">

                                <label for="cv" class="upload-file input-field" id="fileLabel"> <i class="fa fa-file" aria-hidden="true"></i> Upload Your CV</label>
                            </div>
                            <div class="input-wrap get-in-touch col-md-12 col-sm-12">
                                <input type="text" id="portfolio" class="full-width: input-field w-93" placeholder="Your Portfolio Link" name="portfolio">
                            </div>
                            <div class="input-wrap get-in-touch col-md-12">
                                <textarea class="general_input italic input-field w-93" id="message" placeholder="Write Something About You" name="message"></textarea>
                            </div>
                            <input type="hidden" name="designation" value="Game Designer Job">
                        </div>
                        <input type="submit" class="sub-btn" value="Send your Idea" id="submit-apply-form">
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= APPLY NOW END============================= -->

    <!-- ===============APPLY REQUIRMENTS START================= -->
    <section id="apply-reqirement" class="mb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <p>&nbsp;</p>
                    <p class="text-left"><strong>Job Description:</strong></p>
                    <p class=" text-left">A video game designer turns the concept of a game into a playable
                        product.
                        Game designers typically work in a managerial role on a video game project, an initial proposal
                        that addresses budget concerns, target demographics, project requirements, and deadlines.
                        Attention to detail is essential, as are clear writing and communication skills and enthusiasm
                        and knowledge about the video game industry.<br><br>
                        The designers are responsible for the games' storylines and plots, user interfaces, in-game
                        objectives, maps, scenarios, the degree of difficulty, and character development. Game
                        designers typically work in studios or office settings with other designers and programmers.
                        <br><br>
                        If you're a passionate gamer with the imagination, creativity, and skills to build virtual
                        worlds, consider a career in game design.
                    </p>
                    <br>
                    <!--           <p>&nbsp;</p>-->
                    <p class="text-left"><strong>Job Responsibilities:</strong></p>
                    <ul class="list-of-rules list">
                        <li>Developing gameplay ideas, plots and storylines, characters, maps, scenarios, and levels of
                            difficulty, user interface (menus and controls) concepts, And Coming up with ways of
                            winning and losing the game.</li>
                        <li>Consider, plan, and detail every element of a new game, including the setting, rules, story
                            flow, props, vehicles, character interface, and modes of play.</li>
                        <li>Developing innovative and funny game features that improve customer engagement.</li>
                        <li>Generating game design documents to aid in the production process.</li>
                        <li>Providing feature documentation, prototypes, and diagrams.</li>
                        <li>Maintain design level documentation, including mechanics, guidelines, and mission outlines.
                        </li>
                        <li>Utilizing the knowledge of customer preferences to improve the design concepts of the
                            games.</li>
                        <li>Creating innovative games for entertainment or education purposes.</li>
                        <li>Conceptualizing and developing characters, rules, settings, and stories for new games.</li>
                        <li>Pitching new game ideas to executives and clients.</li>
                        <li>Create detailed specifications for new features, scalable game systems, and in-game
                            rewards.</li>
                        <li>Ensure that game mechanics, systems, and economies meet product goals around engagement,
                            retention, and monetization.</li>
                        <li>lead on the user experience (UX) design of the game, ensuring players have the best
                            experience</li>
                        <li>Conduct periodic design reviews throughout the video game development timeline.</li>
                        <li>Work collaboratively with others, including game developers, artists, and programmers, to
                            produce a prototype - a small-scale playable version of the game.</li>
                        <li>Closely monitor, analyze, and respond to gameplay data and user feedback on your designs
                            through their entire lifecycle, from development to testing to live in-game.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p class="text-left"><strong>Educational Requirements:</strong></p>
                    <ul class=" list-of-rules  list">
                        <li>Bachelor’s degree in Computer Science/Game design or any other related field.</li>
                        <li>BA/BS degree in computer science or related fields; or an equivalent combination of
                            education and experience</li>
                        <li>Diploma in Computer Science or any other related field</li>
                        <li>A college degree or certificate in game design or creative writing will help you get hired
                            as a game designer.</li>
                        <li>Enthusiasm and knowledge of the industry.</li>
                        <li>A strong passion for playing and making video games.</li>
                    </ul>

                    <p>&nbsp;</p>
                    <p class="text-left"><strong>Experience Requirements:</strong></p>
                    <!--<ul" class="text-gray list">-->
                    <li class="list-of-rules">Fresher Can Apply.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p class="text-left"><strong>Weekend: </strong>Friday</p>
                    <p class="text-left"><strong>Working Hour: </strong>Flexible Work Hour (10:00 am - 7:00 pm & 12 pm -
                        9pm)</p>
                    <p class="text-left"><strong>Job Location: </strong>Remote (Till COVID situation is stabilized)</p>
                    <br>
                    <!--        <p>&nbsp;</p>-->
                    <p class="text-left"><strong>The candidates who fulfill the above requirements may submit their
                            application. Please
                            do not apply unnecessarily if it does not match your profile. Send your CV with the
                            expected salary to the email at the link below with the subject line "Application for the
                            post of Game Designer".</strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============APPLY REQUIRMENTS END================= -->

    <?php include_once "inc/footer.php"; ?>

    <!-- js files here -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>