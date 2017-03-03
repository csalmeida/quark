<!DOCTYPE html>
<html>
    <head>
      <!-- Solves any character problems, within the document, depends on the text-editor used as well. -->
      <meta charset="utf-8">
      <!-- Prevent document problems on Microsoft IE and Edge. -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Inform the browser this might be a responsive website. -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Tamma|Bungee" rel="stylesheet">
      <!-- Custom stylesheet. -->
      <link href="css/style.css" rel="stylesheet">
      <title>Protonmail Theme Creator.</title>
    </head>
    <body>
      <header>
        <div>
          <div class="logo">
            <h1>QUARK <sup>beta</sup></h1>
            <h2>A ProtonMail Theme Creator.</h2>
          </div>

          <nav>
            <ul>
              <li id="about">About.</li>
            </ul>
          </nav>
        </div>
      </header>

      <main>
        <div class="app">
          <div class="controls">
            <div class="color-box">
              <input class="hex-box jscolor" value="<?php echo isset($colors['base']) ? $colors['base'] : '1A1A1A'; ?>" data-hex="base_color">
              <h3>Base Color.</h3>
            </div>

            <div class="color-box">
              <input class="hex-box jscolor" value="<?php echo isset($colors['highlight']) ? $colors['highlight'] : '662D91'; ?>" data-hex="highlight_color">
              <h3>Highlight Color.</h3>
            </div>

            <div class="color-box">
              <input class="hex-box jscolor" value="<?php echo isset($colors['navigation']) ? $colors['navigation'] : 'F2F2F2'; ?>" data-hex="navigation_color">
              <h3>Navigation Color.</h3>
            </div>

            <div class="color-box">
              <input class="hex-box jscolor" value="<?php echo isset($colors['search']) ? $colors['search'] : '0C0C0C'; ?>" data-hex="search_color">
              <h3>Search Color.</h3>
            </div>

            <button type="button" id="build">Copy code.</button>
            <a id="raw"><button type="button" name="raw">Raw code.</button></a>
          </div> <!-- .controls -->

          <div class="preview">
            <div class="preview-window">
              <svg version="1.1"
              	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
              	 x="0px" y="0px" viewBox="0 0 843.3 421.9" enable-background="new 0 0 843.3 421.9"
              	 xml:space="preserve">
              <defs>
              </defs>
              <g id="preview_1_">
              	<rect id="frame_x5F_background_1_" x="2.8" y="0.5" fill="#F2F2F2" width="840.5" height="421.4"/>
              	<g id="message_x5F_background_1_">
              		<rect id="message_x5F_background_x5F_7_1_" x="177.8" y="92" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_6_1_" x="177.8" y="140" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_5_1_" x="177.8" y="187.9" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_4_1_" x="177.8" y="235.9" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_3_1_" x="177.8" y="283.8" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_2_1_" x="177.8" y="331.8" fill="#E6E6E6" width="665.6" height="41"/>
              		<rect id="message_x5F_background_x5F_1_1_" x="177.8" y="379.7" fill="#E6E6E6" width="665.6" height="41"/>
              	</g>
              	<g id="base_x5F_frame_1_">
              		<rect id="horizontal_x5F_frame_1_" y="0.5" fill="#1A1A1A" width="843.3" height="63.5"/>
              		<rect id="vertical_x5F_frame_1_" y="0.5" fill="#1A1A1A" width="177.8" height="421.4"/>
              	</g>
              	<path id="search_x5F_bar_1_" fill="#0C0C0C" d="M369.6,45.2H207.3c-4.5,0-8.2-3.7-8.2-8.2v-7.5c0-4.5,3.7-8.2,8.2-8.2h162.3
              		c4.5,0,8.2,3.7,8.2,8.2V37C377.8,41.5,374.1,45.2,369.6,45.2z"/>
              	<g id="protonmail_x5F_logo_1_">
              		<path id="XMLID_45_" fill="#FFFFFF" d="M54.5,28.2c-0.9-0.7-2.2-1-3.8-1h-3.6v13.4h2.3v-4.7h1.4c1.6,0,2.9-0.3,3.8-1
              			c1-0.8,1.5-1.9,1.5-3.4C56,30,55.5,28.9,54.5,28.2z M53.6,31.5c0,1-0.2,1.6-0.7,2c-0.4,0.3-1.1,0.5-2,0.5h-1.5v-4.9h1.5
              			C52.7,29.1,53.6,29.9,53.6,31.5z"/>
              		<path id="XMLID_44_" fill="#FFFFFF" d="M62.1,30c-0.6,0-1.2,0.2-1.7,0.6c-0.3,0.2-0.5,0.5-0.8,0.9l-0.1-1.3h-2v10.4h2.2v-6
              			c0.2-0.6,0.7-2.4,2.1-2.4c0.3,0,0.5,0,0.8,0.1l0.3,0.1l0.4-2.2l-0.2-0.1C62.9,30,62.5,30,62.1,30z"/>
              		<path id="XMLID_41_" fill="#FFFFFF" d="M68.2,29.8c-1.4,0-2.6,0.5-3.5,1.5c-0.8,1-1.2,2.3-1.2,3.9c0,1.6,0.4,3,1.2,3.9
              			c0.8,1,2,1.5,3.5,1.5c1.4,0,2.6-0.5,3.4-1.5c0.8-1,1.2-2.3,1.2-3.9c0-1.6-0.4-3-1.2-3.9C70.8,30.3,69.6,29.8,68.2,29.8z
              			 M68.2,38.7c-1.5,0-2.3-1.2-2.3-3.5c0-1.2,0.2-2.1,0.6-2.7c0.4-0.6,0.9-0.8,1.7-0.8c0.7,0,1.3,0.3,1.7,0.8
              			c0.4,0.6,0.6,1.5,0.6,2.7C70.5,37.6,69.7,38.7,68.2,38.7z"/>
              		<path id="XMLID_40_" fill="#FFFFFF" d="M79.4,38.3c-0.4,0.3-0.8,0.4-1.2,0.4c-0.6,0-0.9-0.2-0.9-1.2v-5.7h2.3l0.3-1.8h-2.5v-2.5
              			L75,27.8V30h-1.6v1.8H75v5.7c0,2,1.1,3.1,2.9,3.1c0.9,0,1.7-0.3,2.4-0.7l0.2-0.1l-0.9-1.6L79.4,38.3z"/>
              		<path id="XMLID_37_" fill="#FFFFFF" d="M85.3,29.8c-1.4,0-2.6,0.5-3.5,1.5c-0.8,1-1.2,2.3-1.2,3.9c0,1.6,0.4,3,1.2,3.9
              			c0.8,1,2,1.5,3.5,1.5c1.4,0,2.6-0.5,3.4-1.5c0.8-1,1.2-2.3,1.2-3.9c0-1.6-0.4-3-1.2-3.9C88,30.3,86.8,29.8,85.3,29.8z M85.3,38.7
              			c-1.5,0-2.3-1.2-2.3-3.5c0-1.2,0.2-2.1,0.6-2.7c0.4-0.6,0.9-0.8,1.7-0.8c0.7,0,1.3,0.3,1.7,0.8c0.4,0.6,0.6,1.5,0.6,2.7
              			C87.6,37.6,86.9,38.7,85.3,38.7z"/>
              		<path id="XMLID_36_" fill="#FFFFFF" d="M97.1,30c-1.1,0-2.1,0.5-3,1.2l-0.1-1h-2v10.4h2.2v-7.3c0.3-0.5,1.1-1.4,2.2-1.4
              			c1,0,1.3,0.4,1.3,1.4v7.3h2.2v-7.4c0-1-0.2-1.8-0.7-2.3C98.8,30.3,98.1,30,97.1,30z"/>
              		<path id="XMLID_35_" fill="#FFFFFF" d="M111.3,27.2l-2.6,8.9l-2.7-8.9h-2.8l-1.1,13.4h2.2l0.5-6.9c0.1-1,0.1-2.1,0.1-3l2.7,8.5
              			h2.1l2.6-8.5c0,0.8,0.1,2,0.2,3l0.6,6.9h2.2l-1.1-13.4L111.3,27.2L111.3,27.2z"/>
              		<path id="XMLID_32_" fill="#FFFFFF" d="M124.5,37.9v-4.7c0-1.6-0.7-3.5-3.9-3.5c-1.1,0-2.2,0.2-3.4,0.7l-0.2,0.1l0.6,1.7l0.2-0.1
              			c0.9-0.3,1.8-0.5,2.5-0.5c1.4,0,1.9,0.5,1.9,1.7v0.5h-1c-1.5,0-2.8,0.3-3.6,0.9c-0.9,0.6-1.3,1.5-1.3,2.6c0,2,1.4,3.3,3.5,3.3
              			c0.6,0,1.2-0.1,1.8-0.4c0.4-0.2,0.8-0.5,1.1-0.8c0.4,0.7,1,1,1.9,1.2l0.2,0l0.6-1.6l-0.2-0.1C124.7,38.8,124.5,38.6,124.5,37.9z
              			 M122.3,35.5v2.1c-0.5,0.8-1.2,1.2-2,1.2c-1.1,0-1.5-0.5-1.5-1.6c0-0.6,0.2-1,0.5-1.2c0.4-0.3,1.1-0.5,2.1-0.5H122.3z"/>
              		<rect id="XMLID_31_" x="127.2" y="30.2" fill="#FFFFFF" width="2.2" height="10.4"/>
              		<path id="XMLID_30_" fill="#FFFFFF" d="M128.3,25.6c-0.4,0-0.8,0.1-1,0.4c-0.3,0.3-0.4,0.6-0.4,1c0,0.8,0.6,1.4,1.5,1.4
              			c0.4,0,0.8-0.1,1.1-0.4c0.3-0.3,0.4-0.6,0.4-1C129.7,26.2,129.1,25.6,128.3,25.6z"/>
              		<path id="XMLID_29_" fill="#FFFFFF" d="M135.3,38.5l-0.2,0.1c-0.2,0.1-0.3,0.1-0.5,0.1c-0.2,0-0.4,0-0.4-0.5V25.8l-2.2,0.3V38
              			c0,0.9,0.2,1.5,0.6,2c0.4,0.4,0.9,0.6,1.6,0.6c0.5,0,1-0.1,1.5-0.4l0.2-0.1L135.3,38.5z"/>
              		<path id="XMLID_26_" fill="#FFFFFF" d="M36.1,23.8c0,0-4.9-0.2-6,5.3v3.7c0,0,0,0.4,1.2,1.2s4,3.1,4.8,3.1s3.7-2.3,4.8-3.1
              			c1.1-0.8,1.2-1.2,1.2-1.2v-3.7C41.1,23.7,36.1,23.8,36.1,23.8z M39.5,31.2h-3.4h-3.4v-2c0.7-2.7,3.4-2.8,3.4-2.8s2.7,0,3.4,2.8
              			V31.2z"/>
              		<path id="XMLID_25_" fill="#FFFFFF" d="M36.1,38.1c0,0-0.8-0.1-1.4-0.5c-0.6-0.4-4.6-3.3-4.6-3.3V40c0,0,0,0.7,0.8,0.7
              			s5.2,0,5.2,0s4.5,0,5.2,0s0.8-0.7,0.8-0.7v-5.7c0,0-4,2.9-4.6,3.3C36.9,38,36.1,38.1,36.1,38.1z"/>
              	</g>
              	<g id="horizontal_x5F_navigation_1_">
              		<g id="hn_x5F_active_x5F_item_1_">
              			<rect id="top_x5F_border_1_" x="619.1" fill="#662D91" width="80.4" height="8.4"/>
              			<g id="hn_x5F_item_x5F_3_1_">
              				<path id="hn_x5F_link_x5F_3_1_" fill="#F2F2F2" d="M697.8,51.9h-77c-1,0-1.7-0.8-1.7-1.7V45c0-1,0.8-1.7,1.7-1.7h77
              					c1,0,1.7,0.8,1.7,1.7v5.1C699.6,51.1,698.8,51.9,697.8,51.9z"/>
              				<path id="hn_x5F_icon_x5F_3_1_" fill="#F2F2F2" d="M665.4,38h-12.1c-1.5,0-2.8-1.2-2.8-2.8V23.1c0-1.5,1.2-2.8,2.8-2.8h12.1
              					c1.5,0,2.8,1.2,2.8,2.8v12.1C668.2,36.7,666.9,38,665.4,38z"/>
              			</g>
              		</g>
              		<g id="hn_x5F_item_x5F_2_1_">
              			<path id="hn_x5F_link_x5F_2_1_" fill="#F2F2F2" d="M812.1,52.8h-77c-1,0-1.7-0.8-1.7-1.7V46c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C813.8,52,813.1,52.8,812.1,52.8z"/>
              			<path id="hn_x5F_icon_x5F_2_1_" fill="#F2F2F2" d="M779.7,38.9h-12.1c-1.5,0-2.8-1.2-2.8-2.8V24c0-1.5,1.2-2.8,2.8-2.8h12.1
              				c1.5,0,2.8,1.2,2.8,2.8v12.1C782.5,37.7,781.2,38.9,779.7,38.9z"/>
              		</g>
              		<g id="hn_x5F_item_x5F_1_1_">
              			<path id="hn_x5F_link_x5F_1_1_" fill="#F2F2F2" d="M583.6,52.8h-77c-1,0-1.7-0.8-1.7-1.7V46c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C585.3,52,584.5,52.8,583.6,52.8z"/>
              			<path id="hn_x5F_icon_x5F_1_1_" fill="#F2F2F2" d="M551.1,38.9H539c-1.5,0-2.8-1.2-2.8-2.8V24c0-1.5,1.2-2.8,2.8-2.8h12.1
              				c1.5,0,2.8,1.2,2.8,2.8v12.1C553.9,37.7,552.7,38.9,551.1,38.9z"/>
              		</g>
              	</g>
              	<g id="vertical_x5F_navigation_1_">
              		<g id="vertical_x5F_items_x5F_links_1_">
              			<path id="vt_x5F_link_x5F_4_1_" fill="#F2F2F2" d="M128.6,179.8h-77c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C130.3,179,129.5,179.8,128.6,179.8z"/>
              			<path id="vt_x5F_link_x5F_3_1_" fill="#F2F2F2" d="M128.6,211h-77c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C130.3,210.2,129.5,211,128.6,211z"/>
              			<path id="vt_x5F_link_x5F_2_1_" fill="#F2F2F2" d="M128.6,242.2h-77c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C130.3,241.4,129.5,242.2,128.6,242.2z"/>
              			<path id="vt_x5F_link_x5F_1_1_" fill="#F2F2F2" d="M128.6,273.4h-77c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h77
              				c1,0,1.7,0.8,1.7,1.7v5.1C130.3,272.6,129.5,273.4,128.6,273.4z"/>
              		</g>
              		<g id="vertical_x5F_items_x5F_icons_1_">
              			<path id="vt_x5F_icon_x5F_4_1_" opacity="0.5" fill="#F2F2F2" d="M39.2,179.8H21.9c-1,0-1.7-0.8-1.7-1.7v-5.1
              				c0-1,0.8-1.7,1.7-1.7h17.3c1,0,1.7,0.8,1.7,1.7v5.1C40.9,179,40.2,179.8,39.2,179.8z"/>
              			<path id="vt_x5F_icon_x5F_3_1_" opacity="0.5" fill="#F2F2F2" d="M39.2,211H21.9c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7
              				h17.3c1,0,1.7,0.8,1.7,1.7v5.1C40.9,210.2,40.2,211,39.2,211z"/>
              			<path id="vt_x5F_icon_x5F_2_1_" opacity="0.5" fill="#F2F2F2" d="M39.2,242.2H21.9c-1,0-1.7-0.8-1.7-1.7v-5.1
              				c0-1,0.8-1.7,1.7-1.7h17.3c1,0,1.7,0.8,1.7,1.7v5.1C40.9,241.4,40.2,242.2,39.2,242.2z"/>
              			<path id="vt_x5F_icon_x5F_1_1_" opacity="0.5" fill="#F2F2F2" d="M39.2,273.4H21.9c-1,0-1.7-0.8-1.7-1.7v-5.1
              				c0-1,0.8-1.7,1.7-1.7h17.3c1,0,1.7,0.8,1.7,1.7v5.1C40.9,272.6,40.2,273.4,39.2,273.4z"/>
              			<g id="vertical_x5F_active_x5F_item_1_">
              				<rect id="vt_x5F_active_x5F_background_1_" y="129.1" opacity="6.000000e-002" fill="#FFFFFF" width="177.8" height="29.6"/>
              				<g id="vt_x5F_active_x5F_icon_x5F_and_x5F_link_1_">
              					<path id="vt_x5F_active_x5F_link_1_" fill="#F2F2F2" d="M128.6,148.7h-77c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h77
              						c1,0,1.7,0.8,1.7,1.7v5.1C130.3,147.9,129.5,148.7,128.6,148.7z"/>
              					<path id="vt_x5F_active_x5F_icon_1_" fill="#662D91" d="M39.2,148.7H21.9c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h17.3
              						c1,0,1.7,0.8,1.7,1.7v5.1C40.9,147.9,40.2,148.7,39.2,148.7z"/>
              					<circle id="vt_x5F_refresh_1_" fill="#F2F2F2" cx="155" cy="144.1" r="5.8"/>
              				</g>
              			</g>
              		</g>
              	</g>
              	<g id="compose_x5F_button_1_">
              		<path id="compose_x5F_background_1_" fill="#662D91" d="M135.2,110.9H30.9c-1.3,0-2.3-1-2.3-2.3V77.3c0-1.3,1-2.3,2.3-2.3h104.4
              			c1.3,0,2.3,1,2.3,2.3v31.3C137.6,109.9,136.5,110.9,135.2,110.9z"/>
              		<path id="compose_x5F_text_1_" fill="#F2F2F2" d="M121.1,96.2h-77c-1,0-1.7-0.8-1.7-1.7v-3c0-1,0.8-1.7,1.7-1.7h77
              			c1,0,1.7,0.8,1.7,1.7v3C122.8,95.4,122,96.2,121.1,96.2z"/>
              	</g>
              	<g id="storage_x5F_bar_1_">
              		<path id="storage_x5F_container_1_" fill="#F2F2F2" d="M157.7,376.2H22.3c-0.7,0-1.3-0.6-1.3-1.3v-1.2c0-0.7,0.6-1.3,1.3-1.3
              			h135.4c0.7,0,1.3,0.6,1.3,1.3v1.2C159,375.6,158.4,376.2,157.7,376.2z"/>
              		<path id="storage_x5F_fill_1_" fill="#662D91" d="M85.2,376.2H22.3c-0.7,0-1.3-0.6-1.3-1.3v-1.2c0-0.7,0.6-1.3,1.3-1.3h62.9
              			c0.7,0,1.3,0.6,1.3,1.3v1.2C86.5,375.6,85.9,376.2,85.2,376.2z"/>
              	</g>
              	<g id="storage_x5F_text_1_">
              		<path id="XMLID_24_" fill="#F2F2F2" d="M118.9,363.7H61.6c-0.6,0-1.1-0.5-1.1-1.1v-1c0-0.6,0.5-1.1,1.1-1.1h57.3
              			c0.6,0,1.1,0.5,1.1,1.1v1C120,363.3,119.5,363.7,118.9,363.7z"/>
              		<path id="XMLID_23_" fill="#F2F2F2" d="M110.5,355.1H70.1c-0.6,0-1.1-0.5-1.1-1.1v-1c0-0.6,0.5-1.1,1.1-1.1h40.4
              			c0.6,0,1.1,0.5,1.1,1.1v1C111.5,354.6,111.1,355.1,110.5,355.1z"/>
              		<path id="XMLID_22_" fill="#F2F2F2" d="M105.7,389.6H74.9c-0.6,0-1-0.4-1-1v-1.2c0-0.6,0.4-1,1-1h30.8c0.6,0,1,0.4,1,1v1.2
              			C106.7,389.2,106.2,389.6,105.7,389.6z"/>
              	</g>
              	<rect id="left_x5F_border_1_" x="177.8" y="235.9" fill="#662D91" width="9.9" height="41"/>
              	<g id="message_x5F_text_1_">
              		<path id="XMLID_21_" fill="#1A1A1A" d="M541.9,116.8H217.2c-1,0-1.7-0.8-1.7-1.7V110c0-1,0.8-1.7,1.7-1.7h324.8
              			c1,0,1.7,0.8,1.7,1.7v5.1C543.7,116,542.9,116.8,541.9,116.8z"/>
              		<path id="XMLID_20_" fill="#999999" d="M631.4,164.8H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h414.2
              			c1,0,1.7,0.8,1.7,1.7v5.1C633.1,164,632.3,164.8,631.4,164.8z"/>
              		<path id="XMLID_19_" fill="#1A1A1A" d="M631.4,308.6H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h414.2
              			c1,0,1.7,0.8,1.7,1.7v5.1C633.1,307.8,632.3,308.6,631.4,308.6z"/>
              		<path id="XMLID_18_" fill="#1A1A1A" d="M631.4,404.5H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h414.2
              			c1,0,1.7,0.8,1.7,1.7v5.1C633.1,403.7,632.3,404.5,631.4,404.5z"/>
              		<path id="XMLID_17_" fill="#999999" d="M413.4,212.7H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h196.3
              			c1,0,1.7,0.8,1.7,1.7v5.1C415.1,211.9,414.4,212.7,413.4,212.7z"/>
              		<path id="XMLID_16_" fill="#999999" d="M413.4,355.7H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h196.3
              			c1,0,1.7,0.8,1.7,1.7v5.1C415.1,354.9,414.4,355.7,413.4,355.7z"/>
              		<path id="XMLID_15_" fill="#1A1A1A" d="M516.2,260.7H217.2c-1,0-1.7-0.8-1.7-1.7v-5.1c0-1,0.8-1.7,1.7-1.7h299.1
              			c1,0,1.7,0.8,1.7,1.7v5.1C518,259.9,517.2,260.7,516.2,260.7z"/>
              	</g>
              </g>
              </svg>
            </div> <!-- .preview-window -->

            <div class="status">
              <div>
                <p id="status">Hi! When you're ready, pick four colors for your theme by clicking on each box.</p>
              </div>
            </div> <!-- .status -->
          </div> <!-- .preview -->
        </div> <!-- .app -->

        <div class="tutorial">
          <h2>How to apply theme on ProtonMail.</h2>
          <p>Hover on steps 1 to 3 to find more information.</p>
          <nav>
            <img src="image/number_one.svg" alt="Number one.">
            <img src="image/number_two.svg" alt="Number two.">
            <img src="image/number_three.svg" alt="Number three.">
          </nav>

          <div class="tutorial_slides">
            <img src="image/tutorial_0.svg" alt="Initial demonstration of how to apply theme.">
          </div> <!-- .tutorial_slides -->
        </div> <!-- .tutorial -->

        <div class="about">
          <h2>About.</h2>
          <p>This is a tool can be used to quickly put together a theme for <a href="https://protonmail.com/" target="_blank">ProtonMail</a> without using any code.</p>
          <p>It creates a theme from four colors. You can select colors by using the color picker or by typing a hexadecimal value which will be applied when you click out of the color box.</p>
          <p>Each color you pick styles different areas and elements of the layout in order to reduce the time spent building a theme. You can use the preview to have an idea of how your color scheme will look when applied to account.</p>
          <h2>Instructions.</h2>
          <p>1. Start by picking four colors, you can have a look at the preview to help you tweak them should you need it.</p>
          <p>2. Once you are happy with your colors a bunch of code (CSS only) is going to be generated for you. Press the copy theme button to copy your theme to your clipboard. You can keep tweaking your color choices even after you pick four of them, just press copy code when you're ready. Alternatively, press Raw CSS to see the code that was generated.</p>
          <p>3. Login on ProtonMail, head to Settings, click on the Appearance tab and paste the theme on Custom Theme. Press save and your colors on your account should change.</p>
        </div>
      </main>

      <footer>
        <div>
          <div>
            <p>Designed and developed with </p>
            <img src="image/heart.svg" alt="love" id="heart">
            <p> by <a href="http://www.csalmeida.com" target="_blank">Cristiano Almeida</a>, 2016.</p>
          </div> <!-- Designed by Cristiano Almeida. -->
          <a href="#">Github.</a>
        </div> <!-- Footer container. -->
      </footer>
    <!-- Javascript. -->
      <!-- Required copy of jQuery 3.1.1. -->
      <script src="js/jquery-3.1.1.min.js"></script>
      <!-- JSCOLOR adds color switchers -->
      <script src="js/jscolor.min.js"></script>
      <!-- CLIPBOARDJS Allows text to be copied. -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>
      <!-- GSAP -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
      <!-- Custom scripts -->
      <script src="js/script.js"></script>
    </body>
</html>
