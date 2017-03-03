//Set's up page animations using GSAP.
// All of these might have a default value set on CSS for performance.
function page_animations() {

  var headerTl = new TimelineMax();

  headerTl.to('header', 0.25 ,{ opacity: 1})
  .to('header .logo h2', 0.25 ,{ opacity: 1})
  .staggerTo($('.color-box'), 0.3 ,{ opacity: 1}, 0.15, "header")
  .staggerTo($('#raw, #build'), 0.3 ,{ opacity: 0.3}, 0.15)
  .staggerTo($('.preview-window, .status'), 0.5 ,{ opacity: 1}, 0.15, "header")
  .to($('.tutorial, .about, footer'), 0.25 ,{ opacity: 1}, "header");



  // Animates footer heart.
  TweenMax.to('#heart', 1, {scale: 1.2, repeat: -1});

  // Animates Tutorial navigation.
  // Mouse in and out need to be monitored.
  $('.tutorial nav img').hover(over, out);
  function over(){
    TweenMax.to(this, 0.25, {y:5});
    //TweenMax.to('.tutorial_slides img', 1, {rotationY:360, immediateRender: false});
  }
  function out(){
    TweenMax.to(this, 0.25, {y:0});
    //TweenMax.to('.tutorial_slides img', 0, {rotationY:0});
  }

}

// AJAX to script that creates CSS */
/* This array will contain all colors eventually. */
// Needs default values.
// This could be done by setting default values here on in the php script.
// Requires an extra request using php.
var colors = {};

// Updates progress when creating a theme.
function status(message, borderColor) {
  $('#status').fadeOut(10);
  $('#status').text(message);
  $('.status').css("border-color", borderColor);
  $('#status').fadeIn();
} // end of fucntion status

// Scrolls to about section when about link is clicked.
function about_scroll() {
  $('#about').click(function(){
    $('html, body').animate({
      scrollTop: $('.about').offset().top
    }, 500);
  });
} // end of function about_scroll

// Changes graphic depending on what step is hovered on tutorial.
function tutorial() {
  $('.tutorial nav img:first-of-type').hover(function(){
    $('.tutorial_slides img').attr('src', 'image/tutorial_1.svg');
  });

  $('.tutorial nav img:nth-of-type(2)').hover(function(){
    $('.tutorial_slides img').attr('src', 'image/tutorial_2.svg');
  });

  $('.tutorial nav img:nth-of-type(3)').hover(function(){
    $('.tutorial_slides img').attr('src', 'image/tutorial_3.svg');
  });
} // end of function tutorial

function raw_css(css) {
  $('#raw').click(function(){
    // Destroys all the page and replaces it with css code.
    $('body').html('<div class="raw-page">' + css + "</div>");
  });
} // end of raw_css

// This functions makes an AJAX call to build theme.
// It also prepares the code to be copied.
function buildTheme(color, colors) {
  // Makes use of clipboardjs to setup a new button.
  var clipboard = new Clipboard('#build');
  clipboard.on('success', function(e) {
    console.info('Success:', "Theme has been copied to clipboard.");
    status('Code copied! Paste it on Custom Theme at ProtonMail and press save.', '#23dd42');
    e.clearSelection();
  });
  clipboard.on('error', function(e) {
      console.error('Error:', "Press Ctrl+C to copy theme.");
      status('Code selected! Press Ctrl+C to copy theme, paste it on Custom Theme at ProtonMail and press save.', '#f7931e');
  });

  // Making ajax call using the post method.
  // Gets data and outputs it to a div at the moments.
  // Using a GET request can be used to make the theme sharable.
  $.post('core/builder.php', {color: color, hex: colors}, function(data) {
      // Convert's string to JSON object.
      data = $.parseJSON(data);

      // Outputs theme into button, ready to be copied.
      $('#build').attr("data-clipboard-text", data.css);

      // Set's share link.
      $('#share').attr('href', data.share);

      // Show that copy and raw buttons are available.
      $('#build, #raw').css('opacity', '1');

      // When Raw CSS button is clicked, it shows raw code.
      raw_css(data.css);

      // Updates user on progress.
      status('Success! Press copy code and paste it on ProtonMail’s Custom Theme section.', '#23dd42');
      }
  ).fail(function() {
    status('Ups! something went wrong. Please try again later.', '#dd403a');
  }); // Ajax call using post method.
} // end of buildTheme

/* This object stores an index of elements that can be changed in the preview.
   It's also able to apply colors to elements. */
function Preview() {
    // These attributes are SVG preview IDs.
    // Each property maps to an area to be colored.
    // Each area has the same colored applied.
    this.base = {
      verticalBar:'#vertical_x5F_frame_1_',
      horizontalBar: '#horizontal_x5F_frame_1_'
    }; // end of base property.

    this.search = {
      bar: '#search_x5F_bar_1_'
    }; // end of search property.

    this.highlight = {
      compose: '#compose_x5F_background_1_',
      verticalActiveIcon: '#vt_x5F_active_x5F_icon_1_',
      storageFill: '#storage_x5F_fill_1_',
      linkTopBorder: '#top_x5F_border_1_',
      linkLeftBorder: '#left_x5F_border_1_'
    }; // end of highlight property

    this.navigation = {
      activeVerticalLink:'#vt_x5F_active_x5F_link_1_',
      refreshIcon:'#vt_x5F_refresh_1_',
      verticalIcon: [
        '#vt_x5F_icon_x5F_4_1_',
        '#vt_x5F_icon_x5F_3_1_',
        '#vt_x5F_icon_x5F_2_1_',
        '#vt_x5F_icon_x5F_1_1_'
      ],
      verticalLink: [
        '#vt_x5F_link_x5F_4_1_',
        '#vt_x5F_link_x5F_3_1_',
        '#vt_x5F_link_x5F_2_1_',
        '#vt_x5F_link_x5F_1_1_'
      ],
      horizontalIcon: [
        '#hn_x5F_icon_x5F_4_1_',
        '#hn_x5F_icon_x5F_3_1_',
        '#hn_x5F_icon_x5F_2_1_',
        '#hn_x5F_icon_x5F_1_1_'
      ],
      horizontalLink: [
        '#hn_x5F_link_x5F_4_1_',
        '#hn_x5F_link_x5F_3_1_',
        '#hn_x5F_link_x5F_2_1_',
        '#hn_x5F_link_x5F_1_1_'
      ]
    }; // end of navigation property.

    /* This method applied color to multiple elements at the same time. */
    this.applyColor = function(object, color) {
      /* Stores elements which color should be applied to.
         Having an empty strings stops it from being undefined. */
      var selector = '';
      var i = 0;
      /* Loops through object and creates a string of selectors. */
      for (var property in object) {
        /* Allows to accomodate an object with different properties. */
        if (object.hasOwnProperty(property)) {
              /* If the loop is at the start of the string does not separate by a comma. */
              if (i === 0) {
                /* Adds 1 to i, stoping the loop from running these statements again. */
                ++i;
                selector = object[property];
              } else {
                selector = selector + "," + object[property];
              } // if (i === 0)
            //console.log(string);
        } // end if (object.hasOwnProperty(property))
    } // end for loop.

    /* Returns a string of selectors to be used when applying colors.
       Applies color isntantly to those elements. */
    $(selector).attr('fill', color);
  };  // end of applyColor method.
} // preview object

/* Function checks which color is being changed and
   applied it to the preview. */
function previewUpdate(hex_attribute, color) {
  var preview = new Preview();
  // Assings color to respective area.
  // Adds it to colors array.
  switch (hex_attribute) {
  case 'base_color':
    // Add color to array.
    colors.base_color = color;
    // Set colors in preview.
    preview.applyColor(preview.base, color);
    //return colors;
    break;
  case 'highlight_color':
    // Add color to array.
    colors.highlight_color = color;
    // Set colors in preview.
    preview.applyColor(preview.highlight, color);
    break;
  case 'navigation_color':
    // Add color to array.
    colors.navigation_color = color;
    preview.applyColor(preview.navigation, color);
    break;
  case 'search_color':
    // Add color to array.
    colors.search_color = color;
    // Set colors in preview.
    preview.applyColor(preview.search, color);
    break;
  default:
    break;
  } // end of switch
} // end of previewUpdate

// Monitos color selections, creates theme when all fours colors are selected.
$('.hex-box').change(function(){
  // Checks which color was changed.
  var hex_attribute = $(this).attr('data-hex'),
  // Saves color picked by the user (hex value).
  // Adds the hash before adding the value.
  color = "#" + $(this).val();

  // Applies colors to respective elements in preview.
  previewUpdate(hex_attribute, color);

  // Displays a message on status depending on number of colors in array.
  // If the number of colors is acceptable it tries to build a theme.
  switch (Object.keys(colors).length) {
  case 1:
    status('Nice choice! Three colors to go.', '#f7931e');
    break;
  case 2:
    status('Feel free to tweak your colors as you go! Two more left.', '#f4bd4e');
    break;
  case 3:
    status('Almost done, one more color to go! You can change colors at any time.', '#f9d93d');
    break;
  case 4:
    buildTheme(color, colors);
    break;
  default:
    break;
  } // end of switch
});

// Functions related with page interactivity.
tutorial();
about_scroll();
page_animations();
console.info('Created by Cristiano Almeida at http://www.csalmeida.com');
console.info('Thank you for using this tool!');
