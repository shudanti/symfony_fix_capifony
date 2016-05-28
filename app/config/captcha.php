<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
    // Captcha configuration for example page
    'ExampleCaptcha' => [
        'UserInputID' => 'captchaCode',
        'DisabledImageStyles' => ' Distortion, Jail, Negative, Snow, WantedCircular, Stitch, Chess3D, Circles, Corrosion, Chipped, Flash, Mass, Rough, BlackOverlap, Overlap, Overlap2, Halo, ThickThinLines, ThickThinLines2, Sunrays, Sunrays2, Darts, Fingerprints, CrossShadow, CrossShadow2, Lego, Strippy, ThinWavyLetters, Chalkboard, WavyColorLetters, AncientMosaic, Vertigo, WavyChess      , MeltingHeat    , SunAndWarmAir  , Graffiti       , Graffiti2      , Cut            , SpiderWeb      , Collage        , InBandages     , Ghostly        , PaintMess      , CaughtInTheNet , CaughtInTheNet2, Bullets        , Bullets2       , Bubbles        , Electric       , MeltingHeat2   , Neon           , Neon2          , Radar          , Ripple         , Ripple2        , SpiderWeb2     , Split2',
        'CodeLength' => CaptchaRandomization::GetRandomCodeLength(1, 3),
        //'TestModeEnabled' => true,
        //'HelpLinkEnabled' => false,
        'ImageWidth' => 250,
        'ImageHeight' => 50,
    ],

];
