<section id="content">
    <div class="container">

        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php foreach ($artikel as $row) : ?>
                        <div class="span4">
                            <div class="box flyIn">
                                <div class="icon">
                                    <i class="ico icon-circled icon-bgdark icon-dropbox active icon-3x"></i>
                                </div>
                                <div class="text">
                                    <h4>Kabar <strong>Terkini</strong></h4>
                                    <p><?= $row['title']; ?></p>
                                    <a href="#">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>