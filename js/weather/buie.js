//$.ajax({
//       url: 'http://gps.buienradar.nl/getrr.php?lat=52.369918&lon=4.8943573',
//       beforeSend: function(xhr) {
////       xhr.setRequestHeader("Authorization", "Bearer 6QXNMEMFHNY4FJ5ELNFMP5KRW52WFXN5")
//       }, success: function(data){
//       console.log(data);
//       alert(data);
//       //process the JSON data etc
//       }
//       })

$.ajax({
       url: 'http://gps.buienradar.nl/getrr.php?lat=52.369918&lon=4.8943573',
       async:true,
       dataType : 'jsonp',
       jsonp: false,
       crossDomain:true,
       headers: { 'Access-Control-Allow-Origin': '*' },
       success: function(data, status, xhr) {
       alert(data);
       },
       error:function(){
       alert("Error");
       }
       });

