  <div class="startbar">
      <div id="startbutton" class="startbutton-off">
        <b>Start</b>
      </div>
      <div class="time"></div>
    </div>
    <div id="menu">
      <div class="sidebar"></div>
      <div class="headline"><b>Windows</b> 98</div>
      <ul class="menu-content">
         <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990247/directory_program_group_small_fqw8rr.ico">
          Textos
          <ul class="dropdown-content">
          <?php
          foreach ($texts as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990247/directory_program_group_small_fqw8rr.ico">
          Tweets
          <ul class="dropdown-content">
          <?php
          foreach ($tweets as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/w_65,h_65,c_lpad/v1474990246/directory_pictures_ualddt.png">
          Fotos
          <ul class="dropdown-content">
          <?php
          foreach ($photos as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item more" data-icon="/img/icon/bandcamp-icon.ico">
          Bandcamp
          <ul class="dropdown-content">
          <?php
          foreach ($bandcamps as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/c_lpad,g_center,r_0,w_65/v1474990261/media_player_file_sqjlgm.png">
          Spotify
          <ul class="dropdown-content">
          <?php
          foreach ($spotify as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item more" data-icon="https://res.cloudinary.com/penry/image/upload/c_lpad,g_center,r_0,w_65/v1474990261/media_player_file_sqjlgm.png">
          Videos
          <ul class="dropdown-content">
          <?php
          foreach ($videos as $key => $item) {
          ?>
            <li
              class="dropdown-item launch"
              data-launch="item-<?=$item->id ?>"
              data-title="<?=$item->title ?>"
              data-icon="/img/icon/<?=$item->type ?>-icon.ico"
              data-url="/item/<?=$item->id ?>"
            >
              <?=$item->title ?>
            </li>
          <?php
          }
          ?>
          </ul>
        </li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990280/settings_gear_zxd7tf.ico">Settings</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/q_100/v1474990279/search_file_2_yy4muv.ico">Find</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990254/help_book_small_ra0uhc.ico">Help</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990231/application_hourglass_small_yyhy5z.ico">Run</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990258/key_win_anpnfo.ico">Log off</li>
        <li class="item" data-icon="https://res.cloudinary.com/penry/image/upload/v1474990281/shut_down_normal_t24or4.ico">Shutdown</li>
      </ul>
    </div>