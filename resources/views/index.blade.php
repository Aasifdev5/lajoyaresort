@extends('master')
@section('title')
{{ __('Inicio') }}
@endsection
@section('content')
<div class="page_content_wrap" style="
padding-top: 0 !important;
padding-bottom: 0 !important;
">

    <div class="content">
        <article id="post-532" data-post-id="532"
            class="post_item_single post_type_page post-532 page type-page status-publish hentry">
            <div class="post_content entry-content">
                <div data-elementor-type="wp-post" data-elementor-id="532" class="elementor elementor-532">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-9b685d5 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="9b685d5" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-03f217b sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="03f217b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-405d7fb sc_fly_static elementor-widget elementor-widget-slider_revolution"
                                        data-id="405d7fb" data-element_type="widget"
                                        data-widget_type="slider_revolution.default">
                                        <div class="elementor-widget-container">
                                            <div class="wp-block-themepunch-revslider">
                                                <!-- START home2 REVOLUTION SLIDER 6.7.25 -->
                                                <p class="rs-p-wp-fix"></p>
                                                <rs-module-wrap id="rev_slider_7_1_wrapper" data-source="gallery"
                                                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                    <rs-module id="rev_slider_7_1" style="" data-version="6.7.25">
                                                        <rs-slides style="overflow: hidden; position: absolute;">

                                                           @foreach ($sliders as $slider)
<rs-slide style="position: absolute;" data-key="rs-{{ $loop->index + 1 }}" data-title="{{ $slider->title1 }}" data-thumb="{{ asset('uploads/banners/' . basename($slider->image)) }}" data-in="o:0;">
    <img
        fetchpriority="high"
        decoding="async"
        src="dummy.png"
        alt="{{ $slider->alt_text }}"
        title="{{ $slider->title1 }}"
        width="1920"
        height="1280"
        class="rev-slidebg tp-rs-img rs-lazyload"
        data-lazyload="{{ asset('uploads/banners/' . basename($slider->image)) }}"
        data-no-retina
    />

    <!-- Title 1 -->
    <rs-layer
        id="slider-{{ $loop->index + 1 }}-slide-{{ $slider->id }}-layer-26"
        data-type="text"
        data-rsp_ch="on"
        data-xy="x:c;y:t,t,m,m;yo:227px,121px,0,0;"
        data-text="w:normal;s:89,47,38,23;l:95,47,38,23;fw:700;a:center;"
        data-frame_0="o:1;"
        data-frame_0_lines="d:5;sX:0.9;sY:0.9;o:0;"
        data-frame_1="e:power2.inOut;st:500;sp:1000;"
        data-frame_1_lines="d:33;"
        data-frame_999="o:0;st:w;"
        style="z-index:11;font-family:'Nunito'; margin-bottom: 40px;"
    >
        {!! $slider->title1 !!}
    </rs-layer>

    <!-- Title 2 -->
    <rs-layer
        id="slider-{{ $loop->index + 1 }}-slide-{{ $slider->id }}-layer-5"
        data-type="text"
        data-xy="x:c;y:t,m,m,m;yo:449px,75px,75px,75px;"
        data-text="s:18,15,15,15;l:28,24,24,24;fw:400,400,300,300;a:inherit;"
        data-vbility="t,t,f,f"
        data-rsp_bd="off"
        data-frame_0="y:100%;"
        data-frame_0_chars="d:5;"
        data-frame_0_lines="d:5;"
        data-frame_0_mask="u:t;y:100%;"
        data-frame_1="e:power2.inOut;st:1180;sp:700;sR:1180;"
        data-frame_1_lines="d:5;"
        data-frame_1_mask="u:t;"
        data-frame_999="o:0;st:w;sR:7120;"
        style="z-index:10;font-family:'Nunito'; margin-top: 50px; margin-bottom: 40px;"
    >
        {{ $slider->title2 }}
    </rs-layer>

    <!-- Title 3 -->
    <rs-layer
        id="slider-{{ $loop->index + 1 }}-slide-{{ $slider->id }}-layer-6"
        class="offset_top"
        data-type="text"
        data-xy="x:c;y:t,m,m,m;yo:477px,50px,50px,50px;"
        data-text="s:18,15,15,15;l:28,24,24,24;fw:400,400,300,300;a:inherit;"
        data-vbility="t,t,f,f"
        data-rsp_bd="off"
        data-frame_0="y:100%;"
        data-frame_1="e:power4.inOut;st:1180;sp:700;sR:1180;"
        data-frame_999="o:0;st:w;sR:7120;"
        style="z-index:9;font-family:'Nunito'; margin-top: 50px;"
    >
        {{ $slider->title3 }}
    </rs-layer>

    <rs-layer
        id="slider-{{ $loop->index + 1 }}-slide-{{ $slider->id }}-layer-21"
        data-type="shape"
        data-rsp_ch="on"
        data-xy="x:c;y:m;"
        data-text="w:normal;s:20,10,7,4;l:0,13,9,6;"
        data-dim="w:100%;h:100%;"
        data-basealign="slide"
        data-frame_1="sp:0;"
        data-frame_999="o:0;st:w;"
        style="z-index:8;background-color:rgba(0,0,0,0.5);"
    ></rs-layer>
</rs-slide>
@endforeach








                                                        </rs-slides>
                                                    </rs-module>
                                                    <script>
                                                        setREVStartSize({
                                                            c: 'rev_slider_7_1',
                                                            rl: [1240, 1024, 778, 480],
                                                            el: [742, 396, 301, 301],
                                                            gw: [1920, 1024, 778, 320],
                                                            gh: [742, 396, 301, 301],
                                                            type: 'standard',
                                                            justify: '',
                                                            layout: 'fullwidth',
                                                            mh: "300px"
                                                        });
                                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider71"] !== undefined) {
                                                            window.RS_MODULES.modules["revslider71"].once = false;
                                                            window.revapi7 = undefined;
                                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                        }
                                                    </script>
                                                </rs-module-wrap>
                                                <!-- END REVOLUTION SLIDER -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    

<section id="nuestros-servicios" class="elementor-section elementor-top-section elementor-element elementor-element-1b74e85 elementor-section-stretched scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1b74e85" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="padding: 50px;">
    <div class="elementor-container elementor-column-gap-extended" style="
        display: flex; 
        justify-content: center; 
        flex-wrap: wrap; 
        gap: 20px;
    ">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

            .service-card {
                width: 220px; 
                padding: 20px;
                border-radius: 12px;
                text-align: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s, box-shadow 0.3s;
                font-family: 'Nunito', sans-serif;
                color: black;
                display: flex; 
                flex-direction: column; 
                justify-content: center; 
                align-items: center;
            }

            .service-card:hover {
                transform: scale(1.07);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            }

            .service-icon {
                font-size: 40px;
                margin-bottom: 10px;
            }

            .service-title {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .service-button {
                display: inline-block;
                margin-top: auto;
                padding: 8px 15px;
                background: #fff;
                border-radius: 5px;
                color: #000;
                text-decoration: none;
                font-weight: bold;
                transition: background 0.3s;
            }

            .service-button:hover {
                background: rgba(255, 255, 255, 0.4);
            }

            /* Gradient Backgrounds */
            .green { background: linear-gradient(135deg, #28a745, #4CAF50); }
            .blue { background: linear-gradient(135deg, #007bff, #00bfff); }
            .yellow { background: linear-gradient(135deg, #ffc107, #ff9800); }
            .red { background: linear-gradient(135deg, #dc3545, #ff4d4d); }

            /* Mobile Responsive */
            @media (max-width: 768px) {
                .elementor-container {
                    flex-direction: column;
                    align-items: center;
                }
            }
        </style>

        <!-- Membresía Vitalicia La Joya -->
        <div class="trx_addons_column-1_3 service-card green">
            <div class="service-icon">🏊</div>
            <h3 class="service-title">Membresía Vitalicia La Joya</h3>
            <a href="{{url('membership')}}" style="
    display: inline-block;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2); 
    color: white;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s;
    text-align: center;
    font-size: 14px;
    border: 1px solid rgba(255, 255, 255, 0.5);">Leer Más</a>
        </div>

        <!-- Propiedad Compartida en Cabañas -->
        <div class="trx_addons_column-1_3 service-card blue">
            <div class="service-icon">🏖</div>
            <h3 class="service-title">Propiedad Compartida en Cabañas</h3>
           <a href="{{url('ownership')}}" style="
    display: inline-block;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2); 
    color: white;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s;
    text-align: center;
    font-size: 14px;
    border: 1px solid rgba(255, 255, 255, 0.5);">
    Leer Más
</a>


        </div>

        
        <!-- Venta de Terrenos -->
        <div class="trx_addons_column-1_3 service-card red">
            <div class="service-icon">🏕️</div>
            <h3 class="service-title"> Desarrollo Inmobiliario</h3>
            <a href="{{url('land')}}" style="
    display: inline-block;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2); 
    color: white;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s;
    text-align: center;
    font-size: 14px;
    border: 1px solid rgba(255, 255, 255, 0.5);">Leer Más</a>
        </div>
<!-- Smart Vacation by Vacancy Rewards -->
        <div class="trx_addons_column-1_3 service-card yellow">
            <div class="service-icon">🌊</div>
            <h3 class="service-title">Smart Vacation by Vacancy Rewards</h3>
            <a href="{{url('vacancy')}}" style="
    display: inline-block;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2); 
    color: white;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s;
    text-align: center;
    font-size: 14px;
    border: 1px solid rgba(255, 255, 255, 0.5);">Leer Más</a>
        </div>

    </div>
</section>



                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-c3d9392 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c3d9392" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-extended">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9a992f9 sc_inner_width_none sc_layouts_column_icons_position_left"
                                data-id="9a992f9" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3642ecd sc_fly_static elementor-widget elementor-widget-trx_sc_promo"
                                        data-id="3642ecd" data-element_type="widget"
                                        data-settings="{&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                        data-widget_type="trx_sc_promo.default">
                                        <div class="elementor-widget-container">
                                            <div id="trx_sc_promo_588944932"
                                                class="sc_promo sc_promo_default sc_promo_size_normal sc_promo_image_position_left">
                                                <div class="sc_promo_image"
                                                    style="background-image: url('{{ asset('image-copyright-9.jpg') }}'); width: 50%; left: 0;">
                                                </div>

                                                <!-- /.sc_promo_image -->
                                                <div class="sc_promo_text" style="width: 50%;float: right;">
                                                    <div class="sc_promo_text_inner trx_addons_inline_1943992336">
                                                        <h2
                                                            class="sc_item_title sc_promo_title sc_item_title_style_decoration sc_item_title_tag">
                                                            <span class="sc_item_title_text">Deja tus preocupaciones atrás y relájate</span>
                                                        </h2>
                                                        <div class="sc_item_descr sc_promo_descr">
                                                            <p>Ofrecemos experiencias increíbles y creamos aventuras seguras para ti al mismo tiempo. También contamos con alternativas de ocio activo y pasivo.</p>
                                                        </div>
                                                        <div id="sc_button_877996851"
                                                            class="sc_item_button sc_button_wrap sc_item_button sc_item_button_default sc_promo_button">
                                                            <a href="https://wa.me/59174000355"
                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                                                <span class="sc_button_text">
                                                                    <span class="sc_button_title">NUESTROS SERVICIOS</span>
                                                                </span>
                                                                <!-- /.sc_button_text -->
                                                            </a>
                                                            <!-- /.sc_button -->
                                                        </div>
                                                        <!-- /.sc_item_button -->
                                                    </div>
                                                </div>
                                                <!-- /.sc_promo_text -->
                                            </div>
                                            <!-- /.sc_promo -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


 <section class="elementor-section elementor-top-section elementor-element elementor-element-44952d8b elementor-section-stretched elementor-section-full_width scheme_dark elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default" data-id="44952d8b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bacc06a sc_inner_width_none sc_layouts_column_icons_position_left" data-id="bacc06a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-43cd02f sc_fly_static elementor-widget elementor-widget-spacer" data-id="43cd02f" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                  <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="elementor-element elementor-element-5e820c2f sc_fly_static elementor-widget elementor-widget-trx_sc_testimonials" data-id="5e820c2f" data-element_type="widget" data-widget_type="trx_sc_testimonials.default">
                                <div class="elementor-widget-container">

                                  <div id="trx_sc_testimonials_1010432106"
                                                class="sc_testimonials sc_testimonials_default">
                                                <div id="trx_sc_testimonials_1010432106_outer"
                                                    class="sc_testimonials_slider sc_item_slider slider_swiper_outer slider_outer slider_outer_controls slider_outer_controls_bottom slider_outer_nopagination slider_outer_nocentered slider_outer_overflow_hidden slider_outer_one">
                                                    <div id="trx_sc_testimonials_1010432106_swiper"
                                                        class="slider_container swiper-slider-container slider_swiper slider_noresize slider_controls slider_controls_bottom slider_nopagination slider_nocentered slider_overflow_hidden slider_one"
                                                        data-slides-min-width="290" data-pagination="bullets"
                                                        data-mouse-wheel="0" data-autoplay="1" data-slides-centered="0"
                                                        data-slides-overflow="0">
                                                        <div
                                                            class="slides slider-wrapper swiper-wrapper sc_item_columns_1">
                                                            <div class="slider-slide swiper-slide">
                                                                <div data-post-id="2495" class="sc_testimonials_item">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <p>&#8220;El verano es una temporada alegre, perfecta para viajar, enamorarse y, por supuesto, disfrutar de actividades acuáticas. ¡Reserva la mejor fecha y encuentra el lugar ideal para tu fiesta con la ayuda de gestores profesionales!&#8221;</p>

                                                                    </div>
                                                                    <div class="sc_testimonials_item_author">
                                                                        <div class="sc_testimonials_item_author_data">
                                                                            <h4
                                                                                class="sc_testimonials_item_author_title">
                                                                                Silvio Valencia</h4>
                                                                            <div
                                                                                class="sc_testimonials_item_author_subtitle">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slider-slide swiper-slide">
                                                                <div data-post-id="2494" class="sc_testimonials_item">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <p>&#8220;Pasar los feriados largos en esta joya escondida es una experiencia inolvidable. Disfrutar un día de sol en el campo, empezar con deporte por la mañana, luego un refrescante chapuzón en la piscina, y coronar el día con un buen vino y una deliciosa parrilla al almuerzo es simplemente perfecto&#8221;</p>

                                                                    </div>
                                                                    <div class="sc_testimonials_item_author">
                                                                        <div class="sc_testimonials_item_author_data">
                                                                            <h4
                                                                                class="sc_testimonials_item_author_title">
                                                                                Agustin Martinez
</h4>
                                                                            <div
                                                                                class="sc_testimonials_item_author_subtitle">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="slider-slide swiper-slide">
                                                                <div class="sc_testimonials_item">
                                                                    <div class="sc_testimonials_item_content">
                                                                        <p>&#8220;Hice una inversión a corto plazo, y los resultados superaron mis expectativas. El retorno fue rápido y muy satisfactorio. La atención personalizada y el profesionalismo del equipo de La Joya me hicieron sentir segura durante todo el proceso. Sin duda, recomendaría esta oportunidad a quienes buscan algo confiable y rentable. ¡Estoy encantada!&#8221;</p>
                                                                    </div>
                                                                    <div class="sc_testimonials_item_author">
                                                                        <h4 class="sc_testimonials_item_author_title">
                                                                            Jessica Correa</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slider_controls_wrap">
                                                        <a class="slider_prev swiper-button-prev" href="#"></a>
                                                        <a class="slider_next swiper-button-next" href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                  <!-- /.sc_testimonials -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-624f44af sc_inner_width_none sc_layouts_column_icons_position_left" data-id="624f44af" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              <section class="elementor-section elementor-inner-section elementor-element elementor-element-1f091c85 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="1f091c85" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/youtu.be\/XR-R4E2SJ28&quot;,&quot;background_video_start&quot;:0}">
                                <div class="elementor-background-video-container elementor-hidden-mobile">
                                  <div class="elementor-background-video-embed"></div>
                                </div>
                                <div class="elementor-container elementor-column-gap-extended">
                                  <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-50d0cbf2 sc_inner_width_none sc_layouts_column_icons_position_left" data-id="50d0cbf2" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                      </section>

                </div>
            </div>
            <!-- .entry-content -->
        </article>
    </div>
    <!-- </.content> -->

    <!-- </.content_wrap> -->
</div>

@endsection
