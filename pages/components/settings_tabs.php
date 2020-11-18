<div id="settings-tab" class="settings-tab">
    <div class="settings-tab__content">
        <h3 class="settings-tab__title"><?php echo $translation['settings']['changeTheme']; ?></h3>
        <ul class="colorpicker">
            <li class="colorpicker__item lightgreen-bg" title="<?php echo $translation['settings']['colors']['lightgreen']; ?>" data-color="lightgreen"></li>
            <li class="colorpicker__item green-bg" title="<?php echo $translation['settings']['colors']['darkgreen']; ?>" data-color="green"></li>
            <li class="colorpicker__item lightblue-bg" title="<?php echo $translation['settings']['colors']['lightblue']; ?>" data-color="lightblue"></li>
            <li class="colorpicker__item blue-bg" title="<?php echo $translation['settings']['colors']['darkblue']; ?>" data-color="blue"></li>

            <li class="colorpicker__item brown-bg" title="<?php echo $translation['settings']['colors']['brown']; ?>" data-color="brown"></li>
            <li class="colorpicker__item orange-bg" title="<?php echo $translation['settings']['colors']['orange']; ?>" data-color="orange"></li>
            <li class="colorpicker__item yellow-bg" title="<?php echo $translation['settings']['colors']['yellow']; ?>" data-color="yellow"></li>
            <li class="colorpicker__item purple-bg" title="<?php echo $translation['settings']['colors']['purple']; ?>" data-color="purple"></li>
        </ul>

        <h3 class="settings-tab__title"><?php echo $translation['settings']['changeLanguage']; ?></h3>
        <ul class="colorpicker colorpicker--center">
            <li class="colorpicker__item" data-language="en">
                <img src="<?php echo BASE_URL; ?>assets/images/icons/english.svg" alt="<?php echo $translation['settings']['englishIcon']; ?>" title="<?php echo $translation['settings']['languages']['english']; ?>" />
            </li>
            <li class="colorpicker__item" data-language="fr">
                <img src="<?php echo BASE_URL; ?>assets/images/icons/french.svg" alt="<?php echo $translation['settings']['frenchIcon']; ?>" title="<?php echo $translation['settings']['languages']['french']; ?>" />
            </li>
        </ul>
    </div>

    <div id="settings-tab-toggle" class="settings-tab__toggler">
        <img src="<?php echo BASE_URL; ?>assets/images/icons/settings.svg" alt="<?php echo $translation['settings']['parametersIcon']; ?>" />
    </div>
</div>