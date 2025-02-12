<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>
    @php
        $general_setting = \App\Models\Setting::pluck('option_value', 'option_key')->toArray();
        $category = getCategory();
        $adminNotifications = userNotifications();
    @endphp
    <title> {{ $general_setting['app_name'] ?? '' }} || @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset($general_setting['app_fav_icon'] ?? '') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset($general_setting['app_fav_icon'] ?? '') }}" type="image/x-icon">

    <!-- Meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('css/styles.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-post-532-css" href="{{ asset('css/post-532.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="trx_addons-icons-css" href="{{ asset('css/trx_addons_icons.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="jquery-swiper-css" href="{{ asset('css/swiper.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="magnific-popup-css" href="{{ asset('css/magnific-popup.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="trx_addons-css" href="{{ asset('css/__styles.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="tp-fontello-css" href="{{ asset('css/fontello.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="tp-fontello-css" href="{{ asset('css/fontello(1).css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-icons-css" href="{{ asset('css/elementor-icons.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('css/frontend.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('css/all.min.css') }}" type="text/css"
        media="all" />
    <link property="stylesheet" rel="stylesheet" id="esg-plugin-settings-css" href="{{ asset('css/settings.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="fontello-icons-css" href="{{ asset('css/fontello.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="neptunus-main-css" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="neptunus-plugins-css" href="{{ asset('css/__plugins.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="neptunus-animations-css" href="{{ asset('css/animations.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="neptunus-custom-css" href="{{ asset('css/__custom.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="neptunus-color-default-css" href="{{ asset('css/__colors-default.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" id="neptunus-color-dark-css" href="{{ asset('css/__colors-dark.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" id="trx_addons-responsive-css" href="{{ asset('css/__responsive.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="trx_addons-responsive-css" href="{{ asset('css/__responsive(1).css') }}" type="text/css"
        media="all" />

    <link property="stylesheet" rel='stylesheet' id='font-awesome-official-v4shim-css'
        href='{{ asset('css/v4-shims.css') }}' type='text/css' media='all' />

    <link property="stylesheet" rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('css/wc-blocks.css') }}"
        type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" id="elementor-post-831-css" href="{{ asset('css/post-831.css') }}"
        type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" id="elementor-post-1433-css" href="{{ asset('css/post-1433.css') }}"
        type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" id="swiper-css" href="{{ asset('css/swiper.min.css') }}"
        type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" id="e-swiper-css" href="{{ asset('css/e-swiper.min.css') }}"
        type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" id="rs-plugin-settings-css" href="{{ asset('css/rs6.css') }}"
        type="text/css" media="all" />
         <!-- Google Fonts: Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<style>
    #page_preloader {
        background-color: #ffffff !important;
        background-image: url({{ asset('preloader.gif') }});

      }
      body {
            font-family: 'Nunito', sans-serif;
        }
</style>

</head>

<body
    class="page-template-default page page-id-532 wp-custom-logo wp-embed-responsive theme-neptunus ua_chrome preloader woocommerce-no-js tribe-no-js page-template-neptunus body_tag scheme_default blog_mode_page body_style_wide is_single sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-831 header_position_default menu_style_top no_layout elementor-default elementor-kit-3020 elementor-page elementor-page-532">
   <div id="page_preloader"></div>
    <div class="body_wrap">
        <div class="page_wrap">
            <header
                class="top_panel top_panel_custom top_panel_custom_831 top_panel_custom_header-dark-scheme without_bg_image">
                <div data-elementor-type="cpt_layouts" data-elementor-id="831" class="elementor elementor-831">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-35462693 elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="35462693" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-extended">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5e0020ef sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="5e0020ef" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-13666f3 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                        data-id="13666f3" data-element_type="widget"
                                        data-widget_type="trx_sc_layouts_logo.default">
                                        <div class="elementor-widget-container">
                                            <a href="{{ url('/') }}" id="trx_sc_layouts_logo_2013124363"
                                                class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_117190386">
                                                <img loading="lazy" class="logo_image"
                                                    src="{{ asset($general_setting['app_logo'] ?? '') }}"
                                                    srcset="{{ asset($general_setting['app_logo'] ?? '') }}" alt="Neptunus" width="210" height="47">
                                            </a>
                                            <!-- /.sc_layouts_logo -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6d226fde sc_layouts_column sc_layouts_column_align_right sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="6d226fde" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">

                                    <div class="sc_layouts_item elementor-element elementor-element-34028534 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                        data-id="34028534" data-element_type="widget"
                                        data-widget_type="trx_sc_layouts_menu.default">
                                        <div class="elementor-widget-container">
                                            <div id="trx_sc_layouts_menu_231278735"
                                                class="sc_layouts_iconed_text sc_layouts_menu_mobile_button_burger sc_layouts_menu_mobile_button without_menu">
                                                <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#"
                                                    id="mobileMenuToggle">
                                                    <span
                                                        class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-6c2a9af elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_mobile scheme_default elementor-section-height-default elementor-section-height-default"
                        data-id="6c2a9af" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e504aa8 sc_layouts_column sc_layouts_column_align_left sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="e504aa8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-ab375fc sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                        data-id="ab375fc" data-element_type="widget"
                                        data-widget_type="trx_sc_layouts_logo.default">
                                        <div class="elementor-widget-container">
                                            <a href="{{ url('index') }}" id="trx_sc_layouts_logo_1358723303"
                                                class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1014786671">
                                                <img loading="lazy" class="logo_image"
                                                    src="{{ asset($general_setting['app_logo'] ?? '') }}"
                                                    srcset="{{ asset($general_setting['app_logo'] ?? '') }}" alt="Neptunus" width="210" height="47">
                                            </a>
                                            <!-- /.sc_layouts_logo -->
                                        </div>
                                    </div>
                                    <div class="sc_layouts_item elementor-element elementor-element-7b889b4 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                        data-id="7b889b4" data-element_type="widget"
                                        data-widget_type="trx_sc_layouts_menu.default">
                                        <div class="elementor-widget-container">
                                            <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_fade"
                                                id="trx_sc_layouts_menu_535292852" data-animation-in="none"
                                                data-animation-out="none">
                                                <ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
                                                    <li id="menu-item-197"
                                                        class="{{ Request::is('index') || Request::is('/') ? 'current-menu-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-197">
                                                        <a href="{{ url('index') }}">
                                                            <span>Inicio</span>
                                                        </a>

                                                    </li>
                                                     <li id="menu-item-305" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-305">
  <a href="#nuestros-servicios" class="sf-with-ul">
    <span>Nuestros servicios</span>
  </a>
  <ul class="sub-menu" style="display: none;">
    <li id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302">
      <a href="{{ url('membership') }}">
        <span>Membresía Vitalicia La Joya</span>
      </a>
    </li>
    <li id="menu-item-2605" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605">
      <a href="{{ url('ownership') }}">
        <span>Propiedad Compartida en Cabañas</span>
      </a>
    </li>
   <li id="menu-item-2605" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605">
      <a href="{{ url('land') }}">
        <span>DESARROLLO INMOBILIARIO</span>
      </a>
    </li>
     <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-304">
      <a href="{{ url('vacancy') }}">
        <span>Vacaciones Inteligentes por Vacancy Rewards</span>
      </a>
    </li>
  </ul>
</li>
                                                    {{-- <li id="menu-item-198"
                                                        class="{{ Request::is('service') || Request::is('/') ? 'current-menu-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-198">
                                                        <a href="{{ url('service') }}">
                                                            <span>Services </span>
                                                        </a>

                                                    </li> --}}
                                                    <li id="menu-item-418"
                                                        class="{{ Request::is('about') || Request::is('/') ? 'current-menu-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-418">
                                                        <a href="{{ url('about') }}">
                                                            <span>Sobre nosotros</span>
                                                        </a>

                                                    </li>
                                                    {{-- <li id="menu-item-203"
                                                        class="{{ Request::is('news') || Request::is('/') ? 'current-menu-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-203">
                                                        <a href="{{ url('news') }}">
                                                            <span>News</span>
                                                        </a>

                                                    </li>

                                                    <li id="menu-item-305" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-305
    {{ Request::is('news') || Request::is('/') ? 'current-menu-ancestor current-menu-parent' : '' }}">
                                                        <a href="#" aria-haspopup="true" aria-expanded="false">
                                                            <span>Details</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-304
            {{ Request::is('faq') ? 'current-menu-item' : '' }}">
                                                                <a href="{{ url('faq') }}">
                                                                    <span>FAQs</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-2605" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605
            {{ Request::is('events') ? 'current-menu-item' : '' }}">
                                                                <a href="{{ url('events') }}">
                                                                    <span>Events</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li> --}}
                                                    
                                                    <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
    {{ Request::is('contact') ? 'current-menu-item' : '' }}">
                                                        <a href="{{ url('contact') }}">
                                                            <span>Contacto</span>
                                                        </a>
                                                    </li>
 <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
    {{ Request::is('segundaFase') ? 'current-menu-item' : '' }}">
                                                        <a href="{{ url('segundaFase') }}">
                                                            <span> SEGUNDA FASE</span>
                                                        </a>
                                                    </li>
                                                    </li>
                                                    @if(!empty($user_session))
 <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
    {{ Request::is('dashboard') ? 'current-menu-item' : '' }}">
                                                         <a href="{{ url('dashboard') }}" style="text-decoration: none; color: inherit;">
                            @if (!empty($user_session->profile_photo))
                            <img src="{{ asset('profile_photo/') }}<?php echo '/' . $user_session->profile_photo; ?>" class="rounded-circle img-fluid" alt="{{ $user_session->name }}" width="24" height="24">

                            <span>{{ $user_session->name  }}</span>
                        @else
                        <img src="{{ asset('149071.png') }}" alt="Perfil" class="me-2 rounded-circle" width="24" height="24">

                        <span>{{ $user_session->name  }}</span>
                        @endif


                        </a>
                                                    </li>
                                                    @else
                                                    <li id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
    {{ Request::is('Userlogin') ? 'current-menu-item' : '' }}">
                                                        <a href="{{ url('Userlogin') }}">
                                                            <span> Iniciar Sesión</span>
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                            <!-- /.sc_layouts_menu -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-da45d03 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_right sc_inner_width_none"
                                data-id="da45d03" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">


                                    <div class="sc_layouts_item elementor-element elementor-element-b4f9069 sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile scheme_dark sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                        data-id="b4f9069" data-element_type="widget"
                                        data-widget_type="trx_sc_button.default">
                                        <div class="elementor-widget-container">
                                            <div id="trx_sc_button_407848870" class="sc_item_button sc_button_wrap">
                                                <a href="https://wa.me/59174000355"
                                                    class="sc_button hide_on_mobile hide_on_tablet sc_button_default sc_button_size_normal sc_button_icon_right color_style_link3">
                                                    <span class="sc_button_text sc_align_center">
                                                        <span class="sc_button_title">Contactanos</span>
                                                    </span>
                                                    <!-- /.sc_button_text -->
                                                </a>
                                                <!-- /.sc_button -->
                                            </div>
                                            <!-- /.sc_item_button -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </header>
            <div class="menu_mobile_overlay"></div>
            <div class="menu_mobile menu_mobile_fullscreen scheme_dark" id="mobileMenu">
                <div class="menu_mobile_inner">
                    <a class="menu_mobile_close theme_button_close">
                        <span class="theme_button_close_icon"></span>
                    </a>
                    <a class="sc_layouts_logo" href="{{ url('index') }}">
                        <img loading="lazy" src="{{ asset($general_setting['app_logo'] ?? '') }}"
                            srcset="{{ asset($general_setting['app_logo'] ?? '') }}" alt="Neptunus" width="210" height="47">
                    </a>
                    <nav class="menu_mobile_nav_area" itemscope="itemscope"
                        itemtype="http://schema.org/SiteNavigationElement">
                        <ul id="menu_mobile" class="menu_mobile_nav">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-197
                                {{ Request::is('index') || Request::is('/') ? 'current-menu-item current-menu-ancestor current-menu-parent' : '' }}">
                                <a href="{{ url('index') }}">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-305">
  <a href="#nuestros-servicios">
    <span>Nuestros servicios</span>
    <span class="open_child_menu"></span>
  </a>
  <ul class="sub-menu layouts_inited" style="display: none;">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302">
      <a href="{{ url('membership') }}">
        <span>Membresía Vitalicia La Joya</span>
      </a>
    </li>
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605">
      <a href="{{ url('ownership') }}">
        <span>Propiedad Compartida en Cabañas</span>
      </a>
    </li>
   <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605">
      <a href="{{ url('land') }}">
        <span>DESARROLLO INMOBILIARIO</span>
      </a>
    </li>
     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-304">
      <a href="{{ url('vacancy') }}">
        <span>Vacaciones Inteligentes por Vacancy Rewards</span>
      </a>
    </li>
  </ul>
</li>
                            {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-198
                                {{ Request::is('service') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('service') }}">
                                    <span>Service </span>
                                </a>
                            </li> --}}
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-418
                                {{ Request::is('about') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('about') }}">
                                    <span>Sobre nosotros</span>
                                </a>
                            </li>
                            {{-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-203
                                {{ Request::is('news') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('news') }}">
                                    <span>News</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605
                                {{ Request::is('events') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('events') }}">
                                    <span>Events</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2605
                                {{ Request::is('faq') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('faq') }}">
                                    <span>FAQs</span>
                                </a>
                            </li> --}}
                            
                            
                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
                                {{ Request::is('segundaFase') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('segundaFase') }}">
                                    <span> SEGUNDA FASE</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
                                {{ Request::is('contact') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('contact') }}">
                                    <span>Contacto</span>
                                </a>
                            </li>
                             @if (!empty($user_session))
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
                                {{ Request::is('dashboard') ? 'current-menu-item' : '' }}">
                                 <a href="{{ url('dashboard') }}" style="text-decoration: none; color: inherit;">
                            @if (!empty($user_session->profile_photo))
                            <img src="{{ asset('profile_photo/') }}<?php echo '/' . $user_session->profile_photo; ?>" class="rounded-circle img-fluid" alt="{{ $user_session->name }}" width="24" height="24">

                            <span>{{ $user_session->name  }}</span>
                        @else
                        <img src="{{ asset('149071.png') }}" alt="Perfil" class="me-2 rounded-circle" width="24" height="24">

                        <span>{{ $user_session->name  }}</span>
                        @endif


                        </a>
                            </li>
                             @else
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216
                                {{ Request::is('Userlogin') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('Userlogin') }}">
                                    <span> Iniciar Sesión</span>
                                </a>
                            </li>
                             @endif
                        </ul>

                    </nav>
                    {{-- <div class="search_wrap search_style_normal search_mobile">
                        <div class="search_form_wrap">
                            <form role="search" method="get" class="search_form" action="/">
                                <input type="hidden" value="" name="post_types">
                                <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                <button type="submit" class="search_submit trx_addons_icon-search"></button>
                            </form>
                        </div>
                    </div> --}}
                    <div class="socials_mobile">
                        <a target="_blank" href="{{ $general_setting['facebook_url'] ?? '' }}"
                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                            <span class="social_icon social_icon_facebook">
                                <span class="icon-facebook"></span>
                            </span>
                        </a>
                        <a target="_blank" href="{{ $general_setting['youtube_url'] ?? '' }}"
    class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
    <span class="social_icon social_icon_youtube">
        <span class="icon-youtube"></span>
    </span>
</a>



                        <a target="_blank" href="{{ $general_setting['twitter_url'] ?? '' }}"
                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                            <span class="social_icon social_icon_x">
                                <span class="icon-x"></span>
                            </span>
                        </a>
                        <a target="_blank" href="{{ $general_setting['instagram_url'] ?? '' }}"
                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                            <span class="social_icon social_icon_instagramm">
                                <span class="icon-instagramm"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
    // Get the elements
    const mobileMenuToggle = document.getElementById('mobileMenuToggle'); // The menu toggle button
    const mobileMenu = document.getElementById('mobileMenu'); // The mobile menu
    const mobileMenuClose = document.querySelector('.theme_button_close'); // The close button

    // Add event listener to the mobile menu toggle button
    if (mobileMenuToggle && mobileMenu && mobileMenuClose) {
        mobileMenuToggle.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default action
            mobileMenu.classList.toggle('opened'); // Toggle the 'opened' class
        });

        // Add event listener to the close button to remove the 'opened' class
        mobileMenuClose.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default action
            mobileMenu.classList.remove('opened'); // Remove the 'opened' class
        });
    }

    // Handle submenu toggle
    document.querySelectorAll('.open_child_menu').forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default action
            
            // Find the parent menu item
            const menuItem = toggle.closest('.menu-item-has-children');
            
            if (menuItem) {
                menuItem.classList.toggle('opened'); // Toggle 'opened' class on menu item
                
                // Find the submenu and toggle its display
                const subMenu = menuItem.querySelector('.sub-menu');
                if (subMenu) {
                    if (subMenu.style.display === 'block') {
                        subMenu.style.display = 'none';
                    } else {
                        subMenu.style.display = 'block';
                    }
                }
            }
        });
    });
});



            </script>

            @yield('content')

            <!-- </.page_content_wrap> -->
            <footer class="footer_wrap footer_custom footer_custom_1433 footer_custom_footer-light">
                <div data-elementor-type="cpt_layouts" data-elementor-id="1433" class="elementor elementor-1433">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-1e8da1c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="1e8da1c6" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-extended">
                            <!-- Enlaces -->
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-29cae00b sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="29cae00b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-4c160a2b sc_fly_static elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="4c160a2b" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <aside id="wp-widget-nav_menu" class="widget wp-widget-nav_menu">
                                                <h5 class="widget_title">Enlaces</h5>
                                                <div class="menu-links-1-container">
                                                    <ul id="menu-links-1" class="menu">
                                                        <li id="menu-item-559"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-559">
                                                            <a href="{{ url('about') }}">Sobre Nosotros</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Servicios -->
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-37eeacce sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="37eeacce" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-4f2fa4d3 sc_fly_static elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="4f2fa4d3" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <aside id="wp-widget-nav_menu-2" class="widget wp-widget-nav_menu">
                                                <h5 class="widget_title">Servicios</h5>
                                                <div class="menu-services-container">
                                                    <ul id="menu-services" class="menu">
                                                         <li id="menu-item-2818"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
                                                            <a href="{{ url('membership') }}">Membresía Vitalicia La Joya</a>
                                                        </li>
                                                        <li id="menu-item-2818"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
                                                            <a href="{{ url('ownership') }}">Propiedad Compartida en Cabañas</a>
                                                        </li>
                                                       <li id="menu-item-2818"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
                                                            <a href="{{ url('land') }}">DESARROLLO INMOBILIARIO</a>
                                                        </li>
                                                        <li id="menu-item-2818"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
                                                            <a href="{{ url('vacancy') }}">Vacaciones Inteligentes por Vacancy Rewards</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sobre -->
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5c713094 sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="5c713094" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-6abea1bf sc_fly_static elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="6abea1bf" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <aside id="wp-widget-nav_menu-3" class="widget wp-widget-nav_menu">
                                                <div class="menu-about-container">
  <div class="sc_icons_item_details">
    <h5 class="widget_title">
      <span>Dirección de oficinas: </span>
    </h5>
    <div class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
      <span id="menu-item-2818" style="font-weight: 800;font-size: 14px;">
        2DO ANILLO Y AVENIDA SAN MARTÍN, TORRE EQUIPETROL. PLANTA BAJA.
      </span>
    </div>
    <a href="https://maps.app.goo.gl/ZGXrxYLhRrXt8rwT7" target="_blank">
      <button style="margin-top:10px; padding:10px; background-color:#007bff; color:#fff; border:none; border-radius:5px; cursor:pointer;">
        Dirección Oficina
      </button>
    </a>
  </div>
  <br>
  <div class="sc_icons_item_details">
    <h5 class="widget_title">
      <span>Dirección de la joya: </span>
    </h5>
    <div class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2818">
      <span style="font-weight: 800;font-size: 14px;">
        DÉCIMO ANILLO, AVENIDA TRES PASOS AL FRENTE A 1 KM DEL PARQUE DE LOS RECUERDOS
      </span>
    </div>
    <a href="https://maps.app.goo.gl/azAnnLdy3DLzFG5D8" target="_blank">
      <button style="margin-top:10px; padding:10px; background-color:#28a745; color:#fff; border:none; border-radius:5px; cursor:pointer;">
        Dirección Parque
      </button>
    </a>
  </div>
</div>

                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recursos -->
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-28e9edb sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="28e9edb" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-c8b1875 sc_fly_static elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="c8b1875" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <aside id="wp-widget-nav_menu-4" class="widget wp-widget-nav_menu">
                                                <h5 class="widget_title">Recursos</h5>
                                                <div class="menu-resources-container">
                                                    <ul id="menu-resources" class="menu">
                                                        <li id="menu-item-574"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-574">
                                                            <a href="{{ url('contact') }}">Contactos</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Footer Copyright -->
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-2c5474a4 elementor-section-content-middle scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2c5474a4" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-extended">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-10092854 sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="10092854" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-166a1128 sc_fly_static elementor-widget elementor-widget-text-editor"
                                        data-id="166a1128" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <a style="font-size: 14px; text-transform: uppercase; font-weight: 800;"
                                                href="#" target="_blank"
                                                rel="noopener">{{ $general_setting['app_copyright'] ?? '' }}</a>
                                            <span style="font-size: 14px; font-style: normal; font-weight: 800; text-transform: uppercase;">©</span>
                                            <span style="font-size: 14px; text-transform: uppercase; font-weight: 800;">{{ now()->year }}. Todos los Derechos Reservados.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Redes Sociales -->
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-13119964 sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="13119964" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="sc_layouts_item elementor-element elementor-element-52da1dd2 sc_fly_static elementor-widget elementor-widget-trx_sc_socials"
                                        data-id="52da1dd2" data-element_type="widget"
                                        data-widget_type="trx_sc_socials.default">
                                        <div class="elementor-widget-container">
                                            <div id="trx_sc_socials_1535176462"
                                                class="sc_socials sc_socials_default sc_align_right">
                                                <div class="socials_wrap">
                                                    <a target="_blank"
                                                        href="{{ $general_setting['facebook_url'] ?? '' }}"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                                                        <span class="social_icon social_icon_facebook">
                                                            <span class="icon-facebook"></span>
                                                        </span>
                                                    </a>
                                                     <a target="_blank" href="{{ $general_setting['youtube_url'] ?? '' }}"
    class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
    <span class="social_icon social_icon_youtube">
        <span class="icon-youtube"></span>
    </span>
</a>

                                                    <a target="_blank"
                                                        href="{{ $general_setting['twitter_url'] ?? '' }}"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                                                        <span class="social_icon social_icon_x">
                                                            <span class="icon-x"></span>
                                                        </span>
                                                    </a>
                                                    <a target="_blank"
                                                        href="{{ $general_setting['instagram_url'] ?? '' }}"
                                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons">
                                                        <span class="social_icon social_icon_instagramm">
                                                            <span class="icon-instagramm"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- /.socials_wrap -->
                                            </div>
                                            <!-- /.sc_socials -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </footer>

            <!-- /.footer_wrap -->
        </div>
        <!-- /.page_wrap -->
    </div>
    <!-- /.body_wrap -->

    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>

    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.blockUI.min.js') }}" id="jquery-blockui-js" defer></script>
    <script type="text/javascript" src="{{ asset('js/core.min.js') }}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/rbtools.min.js') }}" async id="tp-tools-js"></script>
    <script type="text/javascript" src="{{ asset('js/rs6.min.js') }}" async id="revmin-js"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}" id="jquery-swiper-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}" id="magnific-popup-js"></script>
    <script type="text/javascript" src="{{ asset('js/__scripts.js') }}" id="trx_addons-js"></script>
    <script type="text/javascript" src="{{ asset('js/__scripts(1).js') }}" id="neptunus-init-js"></script>


    <script type="text/javascript" src="{{ asset('js/frontend.min.js') }}" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('js/tweenmax.min.js" ') }}" id="tweenmax-js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.classList.add('fade-out');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500); // Adjust based on animation duration
            }
        });

        // Fallback in case DOMContentLoaded is delayed
        setTimeout(() => {
            const preloader = document.getElementById('preloader');
            if (preloader && preloader.style.display !== 'none') {
                preloader.style.display = 'none';
            }
        }, 3000); // 3-second fallback
    </script>

    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rev_slider_7_1_wrapper .hesperiden.tparrows {
            cursor: pointer;
            background: rgba(255, 255, 255, 0.15);
            width: 53px;
            height: 53px;
            position: absolute;
            display: block;
            z-index: 1000;
            border-radius: 50%
        }

        #rev_slider_7_1_wrapper .hesperiden.tparrows.rs-touchhover {
            background: #bfc943
        }

        #rev_slider_7_1_wrapper .hesperiden.tparrows:before {
            font-family: 'revicons';
            font-size: 15px;
            color: #ffffff;
            display: block;
            line-height: 53px;
            text-align: center
        }

        #rev_slider_7_1_wrapper .hesperiden.tparrows.tp-leftarrow:before {
            content: '\e82c';
            margin-left: -3px
        }

        #rev_slider_7_1_wrapper .hesperiden.tparrows.tp-rightarrow:before {
            content: '\e82d';
            margin-right: -3px
        }

        #rev_slider_7_1_wrapper .hesperiden.tp-bullets {}

        #rev_slider_7_1_wrapper .hesperiden.tp-bullets:before {
            content: ' ';
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box;
            border-radius: 8px
        }

        #rev_slider_7_1_wrapper .hesperiden .tp-bullet {
            width: 10px;
            height: 10px;
            position: absolute;
            background: #bfc943;
            background: -moz-linear-gradient(top, #bfc943 0%, #bfc943 100%);
            background: -webkit-linear-gradient(top, #bfc943 0%, #bfc943 100%);
            background: -o-linear-gradient(top, #bfc943 0%, #bfc943 100%);
            background: -ms-linear-gradient(top, #bfc943 0%, #bfc943 100%);
            background: linear-gradient(to bottom, #bfc943 0%, #bfc943 100%);
            filter: progid:dximagetransform.microsoft.gradient(startcolorstr='#bfc943', endcolorstr='#bfc943', gradienttype=0);
            border: 0px solid #bfc943;
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box
        }

        #rev_slider_7_1_wrapper .hesperiden .tp-bullet.rs-touchhover,
        #rev_slider_7_1_wrapper .hesperiden .tp-bullet.selected {
            background: #00b8f4
        }

        #rev_slider_7_1_wrapper .hesperiden .tp-bullet-image {}

        #rev_slider_7_1_wrapper .hesperiden .tp-bullet-title {}
    </style>


<script type="text/javascript" id="elementor-frontend-js-before">
      /* 
																							<![CDATA[ */
      var elementorFrontendConfig = {
        "environmentMode": {
          "edit": false,
          "wpPreview": false,
          "isScriptDebug": false
        },
        "i18n": {
          "shareOnFacebook": "Share on Facebook",
          "shareOnTwitter": "Share on Twitter",
          "pinIt": "Pin it",
          "download": "Download",
          "downloadImage": "Download image",
          "fullscreen": "Fullscreen",
          "zoom": "Zoom",
          "share": "Share",
          "playVideo": "Play Video",
          "previous": "Previous",
          "next": "Next",
          "close": "Close",
          "a11yCarouselPrevSlideMessage": "Previous slide",
          "a11yCarouselNextSlideMessage": "Next slide",
          "a11yCarouselFirstSlideMessage": "This is the first slide",
          "a11yCarouselLastSlideMessage": "This is the last slide",
          "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
          "xs": 0,
          "sm": 480,
          "md": 768,
          "lg": 1025,
          "xl": 1440,
          "xxl": 1600
        },
        "responsive": {
          "breakpoints": {
            "mobile": {
              "label": "Mobile Portrait",
              "value": 767,
              "default_value": 767,
              "direction": "max",
              "is_enabled": true
            },
            "mobile_extra": {
              "label": "Mobile Landscape",
              "value": 880,
              "default_value": 880,
              "direction": "max",
              "is_enabled": false
            },
            "tablet": {
              "label": "Tablet Portrait",
              "value": 1024,
              "default_value": 1024,
              "direction": "max",
              "is_enabled": true
            },
            "tablet_extra": {
              "label": "Tablet Landscape",
              "value": 1200,
              "default_value": 1200,
              "direction": "max",
              "is_enabled": false
            },
            "laptop": {
              "label": "Laptop",
              "value": 1366,
              "default_value": 1366,
              "direction": "max",
              "is_enabled": false
            },
            "widescreen": {
              "label": "Widescreen",
              "value": 2400,
              "default_value": 2400,
              "direction": "min",
              "is_enabled": false
            }
          },
          "hasCustomBreakpoints": false
        },
        "version": "3.26.4",
        "is_static": false,
        "experimentalFeatures": {
          "e_swiper_latest": true,
          "e_nested_atomic_repeaters": true,
          "e_onboarding": true,
          "e_css_smooth_scroll": true,
          "home_screen": true,
          "link-in-bio": true,
          "floating-buttons": true
        },
        "urls": {
          "assets": "",
          "ajaxurl": "",
          "uploadUrl": ""
        },
        "nonces": {
          "floatingButtonsClickTracking": "9f75f579d3"
        },
        "swiperClass": "swiper",
        "settings": {
          "page": [],
          "editorPreferences": []
        },
        "kit": {
          "stretched_section_container": ".page_wrap",
          "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
          "lightbox_enable_counter": "yes",
          "lightbox_enable_fullscreen": "yes",
          "lightbox_enable_zoom": "yes",
          "lightbox_enable_share": "yes",
          "lightbox_title_src": "title",
          "lightbox_description_src": "description"
        },
        "post": {
          "id": 532,
          "title": "Home%202%20%E2%80%93%20Neptunus",
          "excerpt": "",
          "featuredImage": false
        }
      };
      /* ]]> */
    </script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;
        var revapi7;
        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider71"] = {
            once: RS_MODULES.modules["revslider71"] !== undefined ? RS_MODULES.modules["revslider71"].once : undefined,
            init: function () {
                window.revapi7 = window.revapi7 === undefined || window.revapi7 === null || window.revapi7.length === 0 ? document.getElementById("rev_slider_7_1") : window.revapi7;
                if (window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length == 0) {
                    window.revapi7initTry = window.revapi7initTry === undefined ? 0 : window.revapi7initTry + 1;
                    if (window.revapi7initTry < 20) requestAnimationFrame(function () {
                        RS_MODULES.modules["revslider71"].init()
                    });
                    return;
                }
                window.revapi7 = jQuery(window.revapi7);
                if (window.revapi7.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_7_1");
                    return;
                }
                revapi7.revolutionInit({
                    revapi: "revapi7",
                    DPR: "dpr",
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: "1920,1024,778,320",
                    gridheight: "742,396,301,301",
                    minHeight: "300px",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "742,396,301,301",
                    responsiveLevels: "1240,1024,778,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        mouseScrollNavigation: false,
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onmobile: true,
                            hide_under: 767,
                            left: {
                                h_offset: 50
                            },
                            right: {
                                h_offset: 50
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "hesperiden",
                            hide_over: 766
                        }
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false,
                        visible_area: "20%"
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
                revapi7.bind("revolution.slide.onloaded", function (e) {
                    revapi7.revredraw();
                });
            }
        } // End of RevInitScript
        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <script type="text/javascript">
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(
                `.e-con.e-parent:not(.e-lazyloaded)`
            );
            const lazyloadBackgroundObserver = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add("e-lazyloaded");
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    });
                },
                {
                    rootMargin: "200px 0px 200px 0px",
                }
            );
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/esg.min.js') }}" id="esg-essential-grid-script-js"></script>
    <script type="text/javascript" src="{{ asset('js/esgbox.min.js') }}" id="esg-tp-boxext-js"></script>

 <script>
      window.RS_MODULES = window.RS_MODULES || {};
      window.RS_MODULES.modules = window.RS_MODULES.modules || {};
      window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
      window.RS_MODULES.defered = false;
      window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
      window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    <script>
      var ajaxRevslider;

      function rsCustomAjaxContentLoadingFunction() {
        ajaxRevslider = function(obj) {
          var content = '',
            data = {
              action: 'revslider_ajax_call_front',
              client_action: 'get_slider_html',
              token: '15eb70cb94',
              type: obj.type,
              id: obj.id,
              aspectratio: obj.aspectratio
            };
          jQuery.ajax({
            type: 'post',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'json',
            data: data,
            async: false,
            success: function(ret, textStatus, XMLHttpRequest) {
              if (ret.success == true) content = ret.data;
            },
            error: function(e) {
              console.log(e);
            }
          });
          return content;
        };
        var ajaxRemoveRevslider = function(obj) {
          return jQuery(obj.selector + ' .rev_slider').revkill();
        };
        if (jQuery.fn.tpessential !== undefined)
          if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined') jQuery.fn.tpessential.defaults.ajaxTypes.push({
            type: 'revslider',
            func: ajaxRevslider,
            killfunc: ajaxRemoveRevslider,
            openAnimationSpeed: 0.3
          });
      }
      var rsCustomAjaxContent_Once = false;
      if (document.readyState === "loading") document.addEventListener('readystatechange', function() {
        if ((document.readyState === "interactive" || document.readyState === "complete") && !rsCustomAjaxContent_Once) {
          rsCustomAjaxContent_Once = true;
          rsCustomAjaxContentLoadingFunction();
        }
      });
      else {
        rsCustomAjaxContent_Once = true;
        rsCustomAjaxContentLoadingFunction();
      }
    </script>
    <script>
      (function(body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
      })(document.body);
    </script>
    <!-- Instagram Feed JS -->
    <script type="text/javascript">
      var sbiajaxurl = "/wp-admin/admin-ajax.php";
    </script>
    <script>
      /* 
																							<![CDATA[ */
      var tribe_l10n_datatables = {
        "aria": {
          "sort_ascending": ": activate to sort column ascending",
          "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
          "all": "All",
          "next": "Next",
          "previous": "Previous"
        },
        "select": {
          "rows": {
            "0": "",
            "_": ": Selected %d rows",
            "1": ": Selected 1 row"
          }
        },
        "datepicker": {
          "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
          "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
          "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
          "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
          "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          "nextText": "Next",
          "prevText": "Prev",
          "currentText": "Today",
          "closeText": "Done",
          "today": "Today",
          "clear": "Clear"
        }
      }; /* ]]> */
    </script>
    <script type='text/javascript'>
      const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              let lazyloadBackground = entry.target;
              if (lazyloadBackground) {
                lazyloadBackground.classList.add('e-lazyloaded');
              }
              lazyloadBackgroundObserver.unobserve(entry.target);
            }
          });
        }, {
          rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
          lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
      };
      const events = ['DOMContentLoaded', 'elementor/lazyload/observe', ];
      events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
      });
    </script>
    <script type='text/javascript'>
      (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
      })();
    </script>
    <script>
      if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
          console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
          console.log("To fix this, you can:");
          console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
          console.log("2. Find the double jQuery.js inclusion and remove it");
          return "Double Included jQuery Library";
        }
      }
    </script>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
      #rev_slider_7_1_wrapper .hesperiden.tparrows {
        cursor: pointer;
        background: rgba(255, 255, 255, 0.15);
        width: 53px;
        height: 53px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 50%
      }

      #rev_slider_7_1_wrapper .hesperiden.tparrows.rs-touchhover {
        background: #bfc943
      }

      #rev_slider_7_1_wrapper .hesperiden.tparrows:before {
        font-family: 'revicons';
        font-size: 15px;
        color: #ffffff;
        display: block;
        line-height: 53px;
        text-align: center
      }

      #rev_slider_7_1_wrapper .hesperiden.tparrows.tp-leftarrow:before {
        content: '\e82c';
        margin-left: -3px
      }

      #rev_slider_7_1_wrapper .hesperiden.tparrows.tp-rightarrow:before {
        content: '\e82d';
        margin-right: -3px
      }

      #rev_slider_7_1_wrapper .hesperiden.tp-bullets {}

      #rev_slider_7_1_wrapper .hesperiden.tp-bullets:before {
        content: ' ';
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        padding: 10px;
        margin-left: -10px;
        margin-top: -10px;
        box-sizing: content-box;
        border-radius: 8px
      }

      #rev_slider_7_1_wrapper .hesperiden .tp-bullet {
        width: 10px;
        height: 10px;
        position: absolute;
        background: #bfc943;
        background: -moz-linear-gradient(top, #bfc943 0%, #bfc943 100%);
        background: -webkit-linear-gradient(top, #bfc943 0%, #bfc943 100%);
        background: -o-linear-gradient(top, #bfc943 0%, #bfc943 100%);
        background: -ms-linear-gradient(top, #bfc943 0%, #bfc943 100%);
        background: linear-gradient(to bottom, #bfc943 0%, #bfc943 100%);
        filter: progid:dximagetransform.microsoft.gradient(startcolorstr='#bfc943', endcolorstr='#bfc943', gradienttype=0);
        border: 0px solid #bfc943;
        border-radius: 50%;
        cursor: pointer;
        box-sizing: content-box
      }

      #rev_slider_7_1_wrapper .hesperiden .tp-bullet.rs-touchhover,
      #rev_slider_7_1_wrapper .hesperiden .tp-bullet.selected {
        background: #00b8f4
      }

      #rev_slider_7_1_wrapper .hesperiden .tp-bullet-image {}

      #rev_slider_7_1_wrapper .hesperiden .tp-bullet-title {}
    </style>
   <script type="text/javascript" src="{{ asset('js/core.min.js') }}" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="{{ asset('js/datepicker.min.js') }}" id="jquery-ui-datepicker-js"></script>

<script type="text/javascript" src="{{ asset('js/spin.min.js') }}" id="booked-spin-js-js"></script>
<script type="text/javascript" src="{{ asset('js/spin.jquery.js') }}" id="booked-spin-jquery-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.tooltipster.min.js') }}" id="booked-tooltipster-js"></script>

<script type="text/javascript" src="{{ asset('js/functions.js') }}" id="booked-functions-js"></script>
<script type="text/javascript" src="{{ asset('js/functions(1).js') }}" id="booked-functions-js"></script>
<script type="text/javascript" src="{{ asset('js/hooks.min.js') }}" id="wp-hooks-js"></script>
<script type="text/javascript" src="{{ asset('js/i18n.min.js') }}" id="wp-i18n-js"></script>

<script type="text/javascript" src="{{ asset('js/index.js') }}" id="swv-js"></script>

<script type="text/javascript" src="{{ asset('js/index.js') }}" id="contact-form-7-js"></script>
<script type="text/javascript" src="{{ asset('js/rbtools.min.js') }}" async id="tp-tools-js"></script>
<script type="text/javascript" src="{{ asset('js/rs6.min.js') }}" async id="revmin-js"></script>
<script type="text/javascript" src="{{ asset('js/swiper.min.js') }}" id="jquery-swiper-js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}" id="magnific-popup-js"></script>

<script type="text/javascript" src="{{ asset('js/__scripts.js') }}" id="trx_addons-js"></script>

<script type="text/javascript" src="{{ asset('js/trx_demo_panels.js') }}" id="trx_demo_panels-js"></script>

<script type="text/javascript" src="{{ asset('js/add-to-cart.min.js') }}" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('js/js.cookie.min.js') }}" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>

<script type="text/javascript" src="{{ asset('js/woocommerce.min.js') }}" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>

<script type="text/javascript" src="{{ asset('js/functions.js') }}" id="booked-fea-js-js"></script>
<script type="text/javascript" src="{{ asset('js/anchor.js') }}" id="trx_addons-sc_anchor-js"></script>
<script type="text/javascript" src="{{ asset('js/superfish.min.js') }}" id="superfish-js"></script>

<script type="text/javascript" src="{{ asset('js/frontend-functions.js') }}" id="booked-wc-fe-functions-js"></script>
<script type="text/javascript" src="{{ asset('js/sourcebuster.min.js') }}" id="sourcebuster-js-js"></script>

<script type="text/javascript" src="{{ asset('js/order-attribution.min.js') }}" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="{{ asset('js/v4-shims.min.js') }}" id="font-awesome-4-shim-js"></script>

<script type="text/javascript" src="{{ asset('js/__scripts.js') }}" id="neptunus-init-js"></script>

<script type="text/javascript" src="{{ asset('js/mediaelement-and-player.min.js') }}" id="mediaelement-core-js"></script>
<script type="text/javascript" src="{{ asset('js/mediaelement-migrate.min.js') }}" id="mediaelement-migrate-js"></script>

<script type="text/javascript" src="{{ asset('js/wp-mediaelement.min.js') }}" id="wp-mediaelement-js"></script>

<script type="text/javascript" src="{{ asset('js/cart-fragments.min.js') }}" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('js/webpack.runtime.min.js') }}" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="{{ asset('js/frontend-modules.min.js') }}" id="elementor-frontend-modules-js"></script>

    <script type="text/javascript" id="elementor-frontend-js-before">
      /* 
																							<![CDATA[ */
      var elementorFrontendConfig = {
        "environmentMode": {
          "edit": false,
          "wpPreview": false,
          "isScriptDebug": false
        },
        "i18n": {
          "shareOnFacebook": "Share on Facebook",
          "shareOnTwitter": "Share on Twitter",
          "pinIt": "Pin it",
          "download": "Download",
          "downloadImage": "Download image",
          "fullscreen": "Fullscreen",
          "zoom": "Zoom",
          "share": "Share",
          "playVideo": "Play Video",
          "previous": "Previous",
          "next": "Next",
          "close": "Close",
          "a11yCarouselPrevSlideMessage": "Previous slide",
          "a11yCarouselNextSlideMessage": "Next slide",
          "a11yCarouselFirstSlideMessage": "This is the first slide",
          "a11yCarouselLastSlideMessage": "This is the last slide",
          "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
          "xs": 0,
          "sm": 480,
          "md": 768,
          "lg": 1025,
          "xl": 1440,
          "xxl": 1600
        },
        "responsive": {
          "breakpoints": {
            "mobile": {
              "label": "Mobile Portrait",
              "value": 767,
              "default_value": 767,
              "direction": "max",
              "is_enabled": true
            },
            "mobile_extra": {
              "label": "Mobile Landscape",
              "value": 880,
              "default_value": 880,
              "direction": "max",
              "is_enabled": false
            },
            "tablet": {
              "label": "Tablet Portrait",
              "value": 1024,
              "default_value": 1024,
              "direction": "max",
              "is_enabled": true
            },
            "tablet_extra": {
              "label": "Tablet Landscape",
              "value": 1200,
              "default_value": 1200,
              "direction": "max",
              "is_enabled": false
            },
            "laptop": {
              "label": "Laptop",
              "value": 1366,
              "default_value": 1366,
              "direction": "max",
              "is_enabled": false
            },
            "widescreen": {
              "label": "Widescreen",
              "value": 2400,
              "default_value": 2400,
              "direction": "min",
              "is_enabled": false
            }
          },
          "hasCustomBreakpoints": false
        },
        "version": "3.26.4",
        "is_static": false,
        "experimentalFeatures": {
          "e_swiper_latest": true,
          "e_nested_atomic_repeaters": true,
          "e_onboarding": true,
          "e_css_smooth_scroll": true,
          "home_screen": true,
          "link-in-bio": true,
          "floating-buttons": true
        },
        "urls": {
          "assets": "",
          "ajaxurl": "",
          "uploadUrl": ""
        },
        "nonces": {
          "floatingButtonsClickTracking": "9f75f579d3"
        },
        "swiperClass": "swiper",
        "settings": {
          "page": [],
          "editorPreferences": []
        },
        "kit": {
          "stretched_section_container": ".page_wrap",
          "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
          "lightbox_enable_counter": "yes",
          "lightbox_enable_fullscreen": "yes",
          "lightbox_enable_zoom": "yes",
          "lightbox_enable_share": "yes",
          "lightbox_title_src": "title",
          "lightbox_description_src": "description"
        },
        "post": {
          "id": 532,
          "title": "Home%202%20%E2%80%93%20Neptunus",
          "excerpt": "",
          "featuredImage": false
        }
      };
      /* ]]> */
    </script>
   <script type="text/javascript" src="{{ asset('js/frontend.min.js') }}" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('js/tweenmax.min.js') }}" id="tweenmax-js"></script>
    <script id="rs-initialisation-scripts">
      var tpj = jQuery;
      var revapi7;
      if (window.RS_MODULES === undefined) window.RS_MODULES = {};
      if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
      RS_MODULES.modules["revslider71"] = {
        once: RS_MODULES.modules["revslider71"] !== undefined ? RS_MODULES.modules["revslider71"].once : undefined,
        init: function() {
          window.revapi7 = window.revapi7 === undefined || window.revapi7 === null || window.revapi7.length === 0 ? document.getElementById("rev_slider_7_1") : window.revapi7;
          if (window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length == 0) {
            window.revapi7initTry = window.revapi7initTry === undefined ? 0 : window.revapi7initTry + 1;
            if (window.revapi7initTry < 20) requestAnimationFrame(function() {
              RS_MODULES.modules["revslider71"].init()
            });
            return;
          }
          window.revapi7 = jQuery(window.revapi7);
          if (window.revapi7.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_7_1");
            return;
          }
          revapi7.revolutionInit({
            revapi: "revapi7",
            DPR: "dpr",
            visibilityLevels: "1240,1024,778,480",
            gridwidth: "1920,1024,778,320",
            gridheight: "742,396,301,301",
            minHeight: "300px",
            lazyType: "smart",
            perspective: 600,
            perspectiveType: "local",
            editorheight: "742,396,301,301",
            responsiveLevels: "1240,1024,778,480",
            progressBar: {
              disableProgressBar: true
            },
            navigation: {
              mouseScrollNavigation: false,
              wheelCallDelay: 1000,
              onHoverStop: false,
              touch: {
                touchenabled: true,
                touchOnDesktop: true
              },
              arrows: {
                enable: true,
                style: "hesperiden",
                hide_onmobile: true,
                hide_under: 767,
                left: {
                  h_offset: 50
                },
                right: {
                  h_offset: 50
                }
              },
              bullets: {
                enable: true,
                tmp: "",
                style: "hesperiden",
                hide_over: 766
              }
            },
            viewPort: {
              global: true,
              globalDist: "-200px",
              enable: false,
              visible_area: "20%"
            },
            fallbacks: {
              allowHTML5AutoPlayOnAndroid: true
            },
          });
          revapi7.bind("revolution.slide.onloaded", function(e) {
            revapi7.revredraw();
          });
        }
      } // End of RevInitScript
      if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
      };
    </script>

</body>

</html>
