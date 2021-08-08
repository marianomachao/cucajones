<!DOCTYPE html>
<html lang="en" >
<head>
  @include('partials.head')
</head>

<body translate="no">
  @include('partials.startbar')
    <div class="desktop">
      <div class="container-fluid">
        <div class="col-md-4">
          <div class="row">
            <?php
            foreach ($items as $key => $item) {
            ?>
                <div class="col-6 col-md-3 col-sm-4">
                  <a href="#"
                    class="launch desktop-icon"
                    data-launch="item-<?=$item->id ?>"
                    data-title="<?=$item->title ?>"
                    data-icon="/img/icon/<?=$item->type ?>-icon.ico"
                    data-url="/item/<?=$item->id ?>"
                    data-type="<?=$item->type ?>"
                    align="center"
                  >
                    <img class="item-icon" src="/img/icon/<?=$item->type ?>-icon.ico" /><br />
                    <span class="desktop-icon-label"><?=$item->title; ?></span>
                  </a>
                </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  @include('partials.javascript')
</body>
</html>