<!--   Header   -->
<div class="section green z-depth-1 center-align">
    <br>
    <h1 class="header center white-text"><img style="vertical-align: middle; padding-left: 20px; padding-right: 20px;" src="/img/logo_100.png"> STRATUS</h1>
    <h5 class="light white-text">Visualize Conversation. Analyze Communication. Enhance Learning.</h5>
    <br><br>
    <a href="http://play.google.com/store/apps/details?id=edu.spu.teamroot.voicecloud" class="btn-large waves-effect waves-light blue">Download from Google Play</a>
    <br><br><br>
</div>

<div class="container" style="margin-top: 70px;">
    <div class="section">

        <!--   Form   -->
        <?=$this->form->create(); ?>
            <div class="row center">
                <p class="light" style="text-align: center">Enter your CLOUDID here to look up a previously saved word cloud</p>
                <br>
                <input type="text" class="form-control" name="id" style="font-size: 35px; width: 25%; margin-right: 20px;" placeholder="93723"><button class="btn-large waves-effect waves-light orange" type="submit" name="action">GO</button>
            </div>

        <?=$this->form->end(); ?>

    </div>
</div>

<div class="section">

    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_PdIatjV2E8" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" style="margin-bottom: 90px;">

        <!--   Bullets   -->
        <div class="row">

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text"><i class="mdi-av-mic"></i></h2>
                    <h5 class="center">Speech To Text</h5>

                    <p class="light">Stratus’s Speech Recognition Service utilizes the Google Speech API for fast and accurate speech to text conversion.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text"><i class="mdi-action-view-module"></i></h2>
                    <h5 class="center">Word Cloud</h5>

                    <p class="light">Words are arranged on the screen as the user speaks. A uniquely crafted algorithm enables words to grow and shift dynamically.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text"><i class="mdi-action-trending-up"></i></h2>
                    <h5 class="center">Statistics Engine</h5>

                    <p class="light">Each word’s count and frequency are tracked and analyzed for visualization and later reference.</p>
                </div>
            </div>

            <div class="col s12 m3">
                <div class="icon-block">
                    <h2 class="center blue-text"><i class="mdi-social-share"></i></h2>
                    <h5 class="center">Word Actions</h5>

                    <p class="light">Users have the ability to search, lookup, and remove words from the cloud visualization.</p>
                </div>
            </div>

        </div>
</div>

<footer class="page-footer orange z-depth-1">
    <div class="container">
        <div class="row">
            <div class="">
                <h5 class="white-text">About Us</h5>
                <p class="grey-text text-lighten-4">We are a team of students at Seattle Pacific University. We enjoy challenging algorithms, visualizing data, and building web services. This app is our senior capstone project. You can view all the source on <a href="http://github.com/team-root">GitHub</a>. Feel free to contribute!</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made with ♥ in Seattle
        </div>
    </div>
</footer>