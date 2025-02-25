<?php

class cbdl_widget_two extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = [
            'description' => __('You can see Bangladesh & World corona update.'),
            'customize_selective_refresh' => true,
        ];
        parent::__construct('corona_world', __('Corona Bangladesh & World Live'), $widget_ops);
    }

    public function widget($args, $instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        echo $args['before_widget']; ?>
<div class="statistics_world">
    <?php if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        } ?>
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
                সূত্র: <a target="_blank" href="https://amdadulhaq.com">আইইডিসিআর</a>
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
                সূত্র: <a target="_blank" href="https://codeappear.com">জনস হপকিন্স ইউনিভার্সিটি</a>
            </div>
        </div>
    </div>
</div>
<?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $instance = wp_parse_args((array) $instance, ['title' => 'বিশ্বে করোনা ভাইরাস']);
        $title = $instance['title']; ?>
<p><label
        for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat"
            id="<?php echo $this->get_field_id('title'); ?>"
            name="<?php echo $this->get_field_name('title'); ?>"
            type="text"
            value="<?php echo esc_attr($title); ?>" /></label></p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $new_instance = wp_parse_args((array) $new_instance, ['title' => '']);
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }
}
