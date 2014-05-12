<section id="<?php echo($url) ?>">
    <h2 class="<?php echo($url) ?>">circulart</h2>
    <article>
        <img src="images/img1.jpg" alt=""/>
        <h3>Circulart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx</h3>
        <p>Circulart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx xxxxxxxxxxxxxxx xxxxx xx x x xxxxxx x xx xCirculart xxxxxxx xxxxxxxxxxxxx xxx </p>
        <canvas id="myCanvas"></canvas>
    </article>
</section>


<script>


        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');
        doResize();
        window.onresize=function() { doResize(); };
         function doResize()
        {

            context.canvas.width = window.innerWidth-20;
            context.beginPath();
            context.moveTo(0, 10);
            context.lineTo(200, 100);
            context.lineTo(240, 50);
            context.lineTo(window.innerWidth-20, 50);

            context.stroke();
        }

</script>