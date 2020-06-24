<?php

add_shortcode('cbdl_widget_1', 'cbdl_widget_1');
add_shortcode('cbdl_widget_2', 'cbdl_widget_2');
add_shortcode('cbdl_widget_3', 'cbdl_widget_3');

function cbdl_widget_1()
{
    ob_start(); ?>
<div class="statistics_bd">
    <h2>বাংলাদেশে করোনা ভাইরাস</h2>
    <div class="body body_bd">
        <h3>সর্বমোট</h3>
        <div class="content">
            <div class="text">আক্রান্ত</div>
            <div id="confirmed" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->confirmed)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">সুস্থ</div>
            <div id="recovered" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->recovered)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">মৃত্যু</div>
            <div id="deaths" class="number death"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->deaths)); ?>
            </div>
        </div>
        <div class="content">
            <div class="number sutro">
                সূত্র: <a target="_blank" href="https://covid.codeofamdad.com">আইইডিসিআর</a>
            </div>
        </div>
    </div>
    <div class="body body_world">
        <h3>সর্বশেষ</h3>
        <div class="content">
            <div class="text">আক্রান্ত</div>
            <div id="wconfirmed" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->last->confirmed)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">সুস্থ</div>
            <div id="wrecovered" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->last->recovered)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">মৃত্যু</div>
            <div id="wdeaths" class="number death"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->last->deaths)); ?>
            </div>
        </div>
        <div class="content">
            <div class="number sutro">
                স্পন্সর: <a target="_blank" href="https://ekotahost.com">একতা হোস্ট</a>
            </div>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}

function cbdl_widget_2()
{
    ob_start(); ?>
<div class="statistics_world">
    <h2>বিশ্বে করোনা ভাইরাস</h2>
    <div class="body body_bd">
        <h3>বাংলাদেশে</h3>
        <div class="content">
            <div class="text">আক্রান্ত</div>
            <div id="confirmed" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->confirmed)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">সুস্থ</div>
            <div id="recovered" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->recovered)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">মৃত্যু</div>
            <div id="deaths" class="number death"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->deaths)); ?>
            </div>
        </div>
        <div class="content">
            <div class="number sutro">
                সূত্র: <a target="_blank" href="https://covid.codeofamdad.com">আইইডিসিআর</a>
            </div>
        </div>
    </div>
    <div class="body body_world">
        <h3>বিশ্বে</h3>
        <div class="content">
            <div class="text">আক্রান্ত</div>
            <div id="wconfirmed" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getWorldData()->Global->TotalConfirmed)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">সুস্থ</div>
            <div id="wrecovered" class="number"><?php echo cbdl_enToBn(number_format(cbdl_getWorldData()->Global->TotalRecovered)); ?>
            </div>
        </div>
        <div class="content">
            <div class="text">মৃত্যু</div>
            <div id="wdeaths" class="number death"><?php echo cbdl_enToBn(number_format(cbdl_getWorldData()->Global->TotalDeaths)); ?>
            </div>
        </div>
        <div class="content">
            <div class="number sutro">
                সূত্র: <a target="_blank" href="https://ekotahost.com">জনস হপকিন্স ইউনিভার্সিটি</a>
            </div>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}

function cbdl_widget_3()
{
    ob_start(); ?>
<div class="wrap" id="containerElem">
    <div class="columns">
        <div class="corona-left clogo">
            <div class="virus-logo">
                <h2><small>বাংলাদেশে</small> <br> করোনাভাইরাস </h2>
            </div>
        </div>
        <div class="corona-right">
            <div class="height-100">
                <div class="cases-count">
                    <div class="total-cases">
                        <h5>মোট আক্রান্ত</h5>
                        <h1 id="confirmed"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->confirmed)); ?>
                        </h1>
                    </div>
                    <div class="recovered-cases">
                        <h5>সুস্থ</h5>
                        <h1 id="recovered"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->recovered)); ?>
                        </h1>
                    </div>
                    <div class="death-cases">
                        <h5>মৃত্যু </h5>
                        <h1 id="deaths"><?php echo cbdl_enToBn(number_format(cbdl_getBNStatsData()->total->deaths)); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="list" id="list">
        <li class="list__item"
            style="color:#FFF !important;border: none !important;background: transparent !important;">জেলা সমূহের
            তথ্য</li>
        <?php foreach (cbdl_getBNDistrictsData()->data as $district): ?>
        <li class="list__item">
            <div>
                <span class="name"><?php echo $district->bnname; ?></span>
                <span class="number"><?php echo cbdl_enToBn(number_format($district->confirmed)); ?></span>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="sourcing small" style="text-align: center;">
        ন্যাশনাল কল সেন্টার <strong>৩৩৩</strong> | স্বাস্থ্য বাতায়ন <strong>১৬২৬৩</strong> | আইইডিসিআর
        <strong>১০৬৫৫</strong> | বিশেষজ্ঞ হেলথ লাইন <strong>০৯৬১১৬৭৭৭৭৭</strong> | সূত্র - <a target="_blank"
            href="https://covid.codeofamdad.com">আইইডিসিআর</a> | স্পন্সর - <a target="_blank"
            href="https://ekotahost.com">একতা হোস্ট</a>
    </div>
</div>
<?php
    return ob_get_clean();
}
