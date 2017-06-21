var MouseWheel = function () {

    return {

        initMouseWheel: function () {
            jQuery('.slider-snap').noUiSlider({
                start: [ 200, 1000 ],
                snap: true,
                connect: true,
                range: {
                    'min': 0,
                    '5%': 100,
                    '10%': 200,
                    '15%': 300,
                    '20%': 400,
                    '25%': 500,
                    '30%': 600,
                    '35%': 700,
                    '40%': 800,
                    '50%': 900,
                    '60%': 1000,
                    '70%': 1500,
                    '80%': 2000,
                    '90%': 2500,
                    'max': 3000
                }
            });
            jQuery('.slider-snap').Link('lower').to(jQuery('.slider-snap-value-lower'));
            jQuery('.slider-snap').Link('upper').to(jQuery('.slider-snap-value-upper'));
        }

    };

}();        