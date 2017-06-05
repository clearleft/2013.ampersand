<?php include '_data/posters.php' ?>
<?php $thisPage     = 'exhibitionpage'; ?>
<?php $pageTitle    = 'Student Typeface Exhibition'; ?>

<?php include("includes/pageHeader.php"); ?>

<body id="wrapper" class="vevent exhibition-page">

    <?php include("includes/header.php"); ?>

    <!-- sponsors-page -->
    <div class="main-content">

        <?php include("includes/nav.php"); ?>

        <article class="section exhibition-page clearfix">
            <h1>Student Typeface Exhibition</h1>
            <p class="loud">Ampersand 2013 is delighted to announce the first international student typeface exhibition, showcasing the best of student type design from around the world.</p>

            <section class="sponsorship-pack">

                <a href="Student_Exhibition_Book.pdf">
                    <div class="button">Student Exhibition Book<br/><small>(24.3Mb PDF)</small></div>
                </a>
                <br>

                <a href="Student_Exhibition.pdf">
                    <div class="button">Student Exhibition Media Pack<br/><small>(1.3Mb PDF)</small></div>
                </a>

            </section>

            <p>The conference presented the diversity of emerging designers&#8217; work in both print and <a href="/specimens/index.php">web specimens</a>, along with a bound take-home catalogue recording the thriving landscape of type design education today.</p>

            <ul class="posters">

<?php
    $count = count($posters);

    for ($i = 0; $i < $count; $i++):
        $id = $i;
        if ($id < 41) {$id = $id+1;}
        if ($id > 12) {$id = $id+1;}
        if ($id > 94) {$id = $id+1;}
        if ($i == 41) {$id = 111;}

        settype($id, "string");
        $id = str_pad($id, 3, "0", STR_PAD_LEFT);
?>
                <li>
                    <a class="fancybox" data-title-id="title-<?php echo $i ?>" href="/posters/big/<?php echo $id ?>.jpg"><img src='/images/d.gif' data-original="posters/th/<?php echo $id ?>.jpg" alt=""></a>
                    <div id="title-<?php echo $i ?>">
                        <h5><?php echo $posters[$i]["name"] ?></h5>
                        <h6><?php echo $posters[$i]["school"] ?></h6>
                        <p><?php echo $posters[$i]["desc"] ?></p>
                    </div>
                </li>
<?php endfor; ?>

            </ul>

        </article>

    </div><!-- END MAIN CONTENT -->

<?php include("includes/footer.php"); ?>

<!-- Add jQuery library -->
<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $(".posters img").lazyload();

        if( window.innerWidth > 548) {
            $(".fancybox")
            .attr('rel', 'gallery')
            .fancybox({
                helpers: {
                    title: {
                        type: 'float'
                    }
                },
                beforeLoad: function() {
                    var el, id = $(this.element).data('title-id');

                    if (id) {
                        el = $('#' + id);

                        if (el.length) {
                            this.title = el.html();
                        }
                    }
                },
                afterShow: function() {
                    window.setTimeout(moveTitle, 10)
                }
            });
        }
    });

    function moveTitle() {
        $(".fancybox-wrap").css({"width": "+=250", "left": "-=125"});
        $(".fancybox-skin").addClass("clearfix");
        $(".fancybox-title-float-wrap, .fancybox-wrap").fadeIn();
    }

</script>
</body>
</html>
