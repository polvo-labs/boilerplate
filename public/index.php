<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Polvo Boilerplate</title>
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>

  <h1 class="_text-center _bg-color-primary _color-white _padding-large _margin-none">Polvo Boilerplate</h1>

  <section class="section-content">
    <div class="container">
      <h2 class="heading-main">Grid</h2>
      <p>
        It supports <a href="http://flexboxgrid.com/" class="ui-link">Flexbox Grid</a>.
      </p>
      <div class="row">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="col-xs-12 col-sm-6 col-md-4 _margin-bottom-large">
            <article class="card-article">
              <a href="#">
                <div class="card-article-image">
                  <img src="http://lorempixel.com/600/400" alt="" class="_responsive">
                </div>
                <div class="card-article-body">
                  <h2 class="card-article-title">
                    Lorem ipsum dolor sit amet.
                  </h2>
                  <p class="card-article-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis perferendis ad culpa iure eveniet doloremque neque deleniti ex quisquam deserunt, sapiente non natus fugit quos totam rerum. Necessitatibus, distinctio, impedit?
                  </p>
                </div>
              </a>
            </article>
          </div>
        <?php endfor ?>
      </div>
    </div>
  </section>

  <section class="section-content _bg-color-gray-light">
    <div class="container">
      <h2 class="heading-main">Form</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <form action="" class="js-form">
            <div class="ui-control">
              <label for="name" class="ui-label">Name:</label>
              <input type="text" name="name" class="ui-input" id="name" required>
            </div>
            <div class="ui-control">
              <label for="select" class="ui-label">Select:</label>
              <div class="ui-select">
                <select name="select" class="ui-input" id="select" required>
                  <option value disabled selected>Select your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
              </div>
            </div>
            <div class="ui-control _text-right">
              <button class="ui-button -primary -block--sm">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="section-content">
    <div class="container">
      <h2 class="heading-main">Buttons</h2>

      <p>
        The buttons supports all colors from <a href="#colors" class="ui-link">Colors</a>.
      </p>

      <p class="_text-center">
        <button class="ui-button -primary">Primary</button>
        <button class="ui-button -success">Success</button>
        <button class="ui-button -warning">Warning</button>
        <button class="ui-button -info">Info</button>
        <button class="ui-button -danger">Danger</button>
      </p>

      <p class="_text-center">
        <button class="ui-button -primary" disabled>
          Disabled Button
        </button>
        <button class="ui-button -success" disabled>
          Disabled Button
        </button>
        <button class="ui-button -warning" disabled>
          Disabled Button
        </button>
        <button class="ui-button -info" disabled>
          Disabled Button
        </button>
        <button class="ui-button -danger" disabled>
          Disabled Button
        </button>
      </p>
    </div>
  </section>

  <section class="section-content">
    <div class="container">
      <h2 class="heading-main">Circular Buttons</h2>
      <p>
        Use the `.-circular` modifier to get circular buttons. Obviously, it only supports icons as content.
      </p>

      <p class="_text-center">
        <button class="ui-button -circular -facebook">
          <i class="icon-facebook"></i>
        </button>
        <button class="ui-button -circular -twitter">
          <i class="icon-twitter"></i>
        </button>
        <button class="ui-button -circular -google">
          <i class="icon-google-plus"></i>
        </button>
      </p>
    </div>
  </section>

  <section class="section-content">
    <div class="container">
      <h2 class="heading-main">Button Sizes</h2>

      <p>
        For default buttons:
      </p>

      <p>
        <button class="ui-button -primary -small">Small</button>
        <button class="ui-button -primary">Default Size</button>
        <button class="ui-button -primary -large">Large</button>
      </p>

      <p>
        For circular buttons:
      </p>

      <p>
        <button class="ui-button -circular -success -small">
          <i class="icon-clock"></i>
        </button>
        <button class="ui-button -circular -success">
          <i class="icon-clock"></i>
        </button>
        <button class="ui-button -circular -success -large">
          <i class="icon-clock"></i>
        </button>
      </p>
    </div>
  </section>

  <section class="section-content _bg-color-gray-light">
    <div class="container">
      <h2 class="heading-main">Icons</h2>

      <?php
        $icons = [
          'home', 'image', 'film', 'location', 'clock', 'spinner',
          'menu', 'cross', 'checkmark', 'circle-up', 'circle-right',
          'circle-down', 'circle-left', 'google-plus', 'facebook',
          'instagram', 'whatsapp', 'twitter', 'youtube', 'linkedin'
        ];
      ?>

      <div class="row _font-size-x-large _text-center">
        <?php foreach ($icons as $icon) : ?>
          <div class="col-sm-2 col-xs-4 _margin-bottom-medium">
            <i class="icon-<?= $icon ?>"></i>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section class="section-content" id="colors">
    <div class="container">
      <h2 class="heading-main">Colors</h2>
        <?php
        $colors = [
          'primary', 'success', 'warning', 'info', 'danger',
          'gray-light', 'gray-medium', 'gray-dark', 'gray-x-dark', 'gray-x-x-dark',
          'white', 'black',
          'facebook', 'twitter', 'google', 'linkedin', 'youtube'
        ];
        ?>

        <div class="row">
          <?php foreach ($colors as $color) : ?>
            <div class="col-xs-3 _margin-bottom-large _text-center">
              <strong><?= $color ?></strong>
              <div class="_padding-large  _bg-color-<?= $color ?>"></div>
            </div>
          <?php endforeach ?>
        </div>
    </div>
  </section>

  <script src="js/bundle.min.js"></script>
</body>
</html>
