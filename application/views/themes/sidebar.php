<div class="span4">

    <aside class="right-sidebar">

        <div class="widget">
            <form>
                <div class="input-append">
                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                    <button class="btn btn-theme" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="widget">

            <h5 class="widgetheading">Kategori</h5>

            <ul class="cat">
                <?php foreach ($kategori as $row) : ?>
                    <li><i class="icon-angle-right"></i> <a href="#"><?= $row['category']; ?></a><span> (20)</span></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="widget">
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
                    <li><a href="#two" data-toggle="tab">Recent</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="one">
                        <ul class="popular">
                            <li>
                                <img src="<?php echo base_url('public/'); ?>img/dummies/blog/small/1.jpg" alt="" class="thumbnail pull-left" />
                                <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                                <span>20 June, 2013</span>
                            </li>
                            <li>
                                <img src="<?php echo base_url('public/'); ?>img/dummies/blog/small/2.jpg" alt="" class="thumbnail pull-left" />
                                <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                                <span>20 June, 2013</span>
                            </li>
                            <li>
                                <img src="<?php echo base_url('public/'); ?>img/dummies/blog/small/3.jpg" alt="" class="thumbnail pull-left" />
                                <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                                <span>20 June, 2013</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="two">
                        <ul class="recent">
                            <li>
                                <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                            </li>
                            <li>
                                <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                            </li>
                            <li>
                                <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="widget">

            <h5 class="widgetheading">Video widget</h5>
            <div class="video-container">
                <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0"> </iframe>
            </div>
        </div>

        <div class="widget">
            <h5 class="widgetheading">Flickr photostream</h5>
            <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
            </div>
            <div class="clear"></div>
        </div>
        <div class="widget">

            <h5 class="widgetheading">Text widget</h5>
            <p>
                Lorem ipsum dolor sit amet, quo everti torquatos rationibus an, graeci splendide mel cu. Sed ad vidisse eruditi maluisset, et duo mazim placerat adipiscing.
            </p>

        </div>
    </aside>
</div>

</div>
</div>
</section>