window.onload = function() {
        L.mapquest.key = 'qzTnUZavy9ByQFHzPld6YQYYwtkP1zD8';

        var baseLayer = L.mapquest.tileLayer('map');

        var map = L.mapquest.map('map', {
          center: [37.7749, -122.4194],
          layers: baseLayer,
          zoom: 12
        });

        L.control.layers({
          'Map': baseLayer,
          'Hybrid': L.mapquest.tileLayer('hybrid'),
          'Satellite': L.mapquest.tileLayer('satellite'),
          'Light': L.mapquest.tileLayer('light'),
          'Dark': L.mapquest.tileLayer('dark')
        }).addTo(map);
        map.addControl(L.mapquest.control());
        L.mapquest.geocoding({color:'blue'}).geocode('Da Nang');
        L.mapquest.geocoding().geocode('Da Nang, 122 Lê Duẩn');
        L.mapquest.geocoding().geocode('Da Nang,1 Lê Duẩn');
        L.mapquest.geocoding().geocode('Da Nang, Văn Cao');
        L.mapquest.geocoding().geocode('Da Nang,Lê Văn Thịnh');
       
      }




      // 
      function displaySigninForm(e){
       
         $('#id01').css({display:'block'});
      };

      function displaySignupForm(e){
        
        $('#signupForm').css({display:'block'});
      }



      // 

      