  ymaps.ready(init);
    ymaps.ready(init2);
    var myMap;
    var myMap2,
    myPlacemark1,
myPlacemark2,
myPlacemark3,
myPlacemark4,
myPlacemark5,
myPlacemark6
    function init(){     
        myMap = new ymaps.Map("map", {
            center: [41.26002170,69.22384302],
            zoom: 16
        });
         myPlacemark1 = new ymaps.Placemark([41.26002170,69.22384302], { hintContent: 'SAROY INVEST', balloonContent: 'Office' 
     });
          myMap.geoObjects.add(myPlacemark1);
    }
    


function init2(){     
        myMap2 = new ymaps.Map("map2", {
            center: [41.27437814, 69.19834987],
            zoom: 12
        });
         myPlacemark2 = new ymaps.Placemark([41.27448313, 69.23534113], { hintContent: 'WHITE HOUSE', balloonContent: 'Living Complex'});
          myPlacemark3 = new ymaps.Placemark([41.25853598, 69.15313553], { hintContent: 'ALGORITM', balloonContent: 'Living Complex' });
           myPlacemark4 = new ymaps.Placemark([41.29610945, 69.19494247], { hintContent: 'MEVAZOR', balloonContent: 'Living Complex' });
           myPlacemark5 = new ymaps.Placemark([41.25179759, 69.16339469], { hintContent: 'ALGORITM NEW', balloonContent: 'Living Complex' });
           myPlacemark6 = new ymaps.Placemark([41.29141465, 69.22517140], { hintContent: 'HAMZA', balloonContent: 'Living Complex' });


          myMap2.geoObjects.add(myPlacemark2).add(myPlacemark3).add(myPlacemark4).add(myPlacemark5).add(myPlacemark6);
    }
   