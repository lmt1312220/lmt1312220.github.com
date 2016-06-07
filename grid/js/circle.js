

$(function () {
$('#0').radialIndicator({
        barColor: '#FFCC00',
        fontColor: 'white',
        barWidth: 10,
        initValue: 40,
        roundCorner : true,
        percentage: true
    });
$('#1').radialIndicator({
        barColor: '#FFCC00',
        fontColor: 'white',
        barWidth: 10,
        initValue: 20,
        roundCorner : true,
        percentage: true
    });

// $('#indicatorContainer2').radialIndicator({
//         barColor: '#FFCC00',
//         fontColor: 'white',
//         barWidth: 10,
//         initValue: 40,
//         roundCorner: true,
//         percentage: true
//     });
	});
 
// var radialObj = $('.indicatorContainer').data('radialIndicator');
//now you can use instance to call different method on the radial progress.
//like