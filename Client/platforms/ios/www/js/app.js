var app = angular.module('Vakilam', ['ionic','ngCordova'])
    .run(function($ionicPlatform) {
        $ionicPlatform.ready(function() {
            // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
            // for form inputs)
            if (window.cordova && window.cordova.plugins.Keyboard) {
                cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
            }
            if (window.StatusBar) {
                StatusBar.styleDefault();
            }
        })
    })
    .config(['$ionicConfigProvider', function($ionicConfigProvider) {
        $ionicConfigProvider.tabs.position('bottom'); // other values: tops
    }])

    .config(function( $ionicConfigProvider) {
        $ionicConfigProvider.navBar.alignTitle('right');
    })
.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
    .state('tabs', {
      url: "/tab",
      abstract: true,
      templateUrl: "templates/tabs.html"
    })
    .state('tabs.home', {
      url: "/home",
      views: {
        'home-tab': {
          templateUrl: "templates/home.html",
          controller: 'HomeTabCtrl'
        }
      }
    })
    .state('tabs.facts', {
      url: "/facts",
      views: {
        'about-tab': {
          templateUrl: "templates/facts.html"
        }
      }
    })
    .state('tabs.facts2', {
      url: "/facts2",
      views: {
        'about-tab': {
          templateUrl: "templates/facts2.html"
        }
      }
    })
      .state('tabs.masterpage', {
          url: "/masterpage",
          views: {
              'about-tab': {
                  templateUrl: "templates/masterpage.html"
              }
          }
      })
      .state('tabs.hoghooghi', {
          url: "/hoghooghi",
          views: {
              'about-tab': {
                  templateUrl: "templates/hoghooghi.html"
              }
          }
      })
      .state('tabs.hoghooghi2', {
          url: "/hoghooghi2",
          views: {
              'about-tab': {
                  templateUrl: "templates/hoghooghi2.html"
              }
          }
      })
      .state('tabs.hagh', {
          url: "/hagh",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagh.html"

              }
          }
      })
      .state('tabs.shekayat', {
          url: "/shekayat",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayat.html"
              }
          }
      })
      .state('tabs.baghie', {
          url: "/baghie",
          views: {
              'about-tab': {
                  templateUrl: "templates/baghie.html"
              }
          }
      })
      .state('tabs.fori', {
          url: "/fori",
          views: {
              'about-tab': {
                  templateUrl: "templates/fori.html"
              }

          }

      })
      .state('tabs.amoozesh', {
          url: "/amoozesh",
          views: {
              'home-tab': {
                  templateUrl: "templates/amoozesh.html"
              }

          }

      })
      .state('tabs.hagheHayat', {
          url: "/hagheHayat",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheHayat.html"
              }
          }
      })

      .state('tabs.hagheAzadi', {
          url: "/hagheAzadi",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheAzadi.html"
              }
          }
      })

      .state('tabs.hagheTahsil', {
          url: "/hagheTahsil",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheTahsil.html"
              }
          }
      })

      .state('tabs.acc', {
          url: "/acc",
          views: {
              'about-tab': {
                  templateUrl: "templates/acc.html"
              }
          }
      })
      .state('tabs.hagheKar', {
          url: "/hagheKar",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheKar.html"
              }
          }
      })

      .state('tabs.digarMavared', {
          url: "/digarMavared",
          views: {
              'about-tab': {
                  templateUrl: "templates/digarMavared.html"
              }
          }
      })

      .state('tabs.mamnooeiyatShekanje', {
          url: "/mamnooeiyatShekanje",
          views: {
              'about-tab': {
                  templateUrl: "templates/mamnooeiyatShekanje.html"
              }
          }
      })
      .state('tabs.hagheAzadiBayan', {
          url: "/hagheAzadiBayan",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheAzadiBayan.html"
              }
          }
      })
      .state('tabs.AzadieMazhab', {
          url: "/AzadieMazhab",
          views: {
              'about-tab': {
                  templateUrl: "templates/AzadieMazhab.html"
              }
          }
      })
      .state('tabs.hagheAzadiTajamo', {
          url: "/hagheAzadiTajamo",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheAzadiTajamo.html"
              }
          }
      })

      .state('tabs.hagheSalamatoBehdasht', {
          url: "/hagheSalamatoBehdasht",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheSalamatoBehdasht.html"
              }
          }
      })

      .state('tabs.hagheDashtaneVakil', {
          url: "/hagheDashtaneVakil",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheDashtaneVakil.html"
              }
          }
      })

      .state('tabs.asleBarabari', {
          url: "/asleBarabari",
          views: {
              'about-tab': {
                  templateUrl: "templates/asleBarabari.html"
              }
          }
      })


      .state('tabs.mohiteZistPak', {
          url: "/mohiteZistPak",
          views: {
              'about-tab': {
                  templateUrl: "templates/mohiteZistPak.html"
              }
          }
      })

      .state('tabs.hoghoogheFarhangi', {
          url: "/hoghoogheFarhangi",
          views: {
              'about-tab': {
                  templateUrl: "templates/hoghoogheFarhangi.html"
              }
          }
      })

      .state('tabs.hagheMaskan', {
          url: "/hagheMaskan",
          views: {
              'about-tab': {
                  templateUrl: "templates/hagheMaskan.html"
              }
          }
      })
      .state('tabs.shekayatHoghooghi', {
          url: "/shekayatHoghooghi",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayatHoghooghi.html"
              }
          }
      })
      .state('tabs.shekayatDivan', {
          url: "/shekayatDivan",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayatDivan.html"
              }
          }
      })
      .state('tabs.shekayatKeyfari', {
          url: "/shekayatKeyfari",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayatKeyfari.html"
              }
          }
      })
      .state('tabs.shekayatBazresi', {
          url: "/shekayatBazresi",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayatBazresi.html"
              }
          }
      })

      .state('tabs.sazmanMelal', {
          url: "/sazmanMelal",
          views: {
              'about-tab': {
                  templateUrl: "templates/sazmanMelal.html"
              }
          }
      })
      .state('tabs.sayerMavared', {
          url: "/sayerMavared",
          views: {
              'about-tab': {
                  templateUrl: "templates/sayerMavared.html"
              }
          }
      })
      .state('tabs.shekayatDigar', {
          url: "/shekayatDigar",
          views: {
              'about-tab': {
                  templateUrl: "templates/shekayatDigar.html"
              }
          }
      })

      .state('tabs.about', {
          url: "/about",
          views: {
              'about-tab': {
                  templateUrl: "templates/about.html"
              }
          }
      })
    .state('tabs.navstack', {
      url: "/navstack",
      views: {
        'about-tab': {
          templateUrl: "templates/nav-stack.html"
        }
      }
    })
    .state('tabs.contact', {
      url: "/contact",
      views: {
        'contact-tab': {
          templateUrl: "templates/contact.html"
        }
      }
    });
   $urlRouterProvider.otherwise("/tab/home" );
})



.controller('HomeTabCtrl', function($scope) {
  console.log('HomeTabCtrl');
})
    //Baghie Chi Porsian Contoroller
    .controller("AppCtrl", function($scope, $http) {




        //Variables
       $scope.msgPoster = {
           username: undefined,
           usComment: undefined
       }
       //Functions
        $scope.msgPosterUser = function(){
            var data = {
                username: $scope.msgPoster.username,
                usComment: $scope.msgPoster.usComment
            }
             $http.post("https://vakilam.org//CP/funcs/api.php", data).success(function(response){
                 console.log(response);
             })
        };
       //Init
    })
    .controller('customersCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/funcs/userdata.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
            });
            console.log($scope.records);
    }])







   ////////////////////////////////////////////// SHEKAYAT NEMOONE ERSAL




    .controller('nemooneShekayatHoghooghiCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneShekayatHoghooghi.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('nemooneShekayatKeyfariCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneShekayatKeyfari.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('nemooneShekayatSazmanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneShekayatSazman.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('nemooneShekayatDivanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneShekayatDivan.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('nemooneShekayatBazresiCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneShekayatBazresi.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('nemooneSayerMavaredCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data3/nemooneSayerMavared.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])

   ////////////////////////////////////////////// SHEKAYAT PAGESS



    .controller('shekayatHoghooghiCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/shekayatHoghooghi.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('shekayatKeyfariCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/shekayatKeyfari.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])

    .controller('shekayatDivanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/shekayatDivan.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])

    .controller('shekayatBazresiCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/shekayatBazresi.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])

    .controller('shekayatSazmanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/shekayatSazman.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])
    .controller('sayerMavaredCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/data2/sayerMavared.php').success(function(data){
            console.log(data);
            $scope.records = data['records'];
        });
        console.log($scope.records);
    }])




   ////////////////////////////////////////////////////////////////// //Safheyeh  hagh ha

   .controller('aslebarabariCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/asleBarabari.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])






.controller('hagheHayatCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheHayat.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('azadieBayanCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/azadieBayan.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('azadieMazhabCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/azadieMazhab.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}]).controller('digarMavaredCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/digarMavared.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheAzadiCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheAzadi.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheAzadieTajamoCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheAzadieTajamo.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheFarhangiCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheFarhangi.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheKarCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheKar.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheMaskanCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheMaskan.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheSalamatCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheSalamat.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheTahsilCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheTahsil.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('hagheVakilCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/hagheVakil.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('mohiteZistCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/mohiteZist.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])
.controller('shekanjehCtrl',[ '$scope','$http',function($scope, $http) {
    $http.get('https://vakilam.org//CP/data/shekanjeh.php').success(function(data){
        console.log(data);
        $scope.records = data['records'];
    });
    console.log($scope.records);
}])



// Get data from Php for tagging to lows

    .controller('barabariCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/asleBarabari.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('HayatCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheHayat.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('BayanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/azadieBayan.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('MazhabCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/azadieMazhab.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }]).controller('MavaredCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/digarMavared.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('azadiVaAmanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/azadiVaAmniyat.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('hagheAzadieTajamo2Ctrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/azadieTajamo.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('FarhangiCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hoghougheFarhangi.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('KaarCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheKar.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('MaskanCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheMaskan.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('SalamatCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheSalamat.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('tahsiilCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheTahsil.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('hagheVakil2Ctrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/hagheVakil.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('mohiteCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/mohiteZistePaak.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])
    .controller('shekanjCtrl',[ '$scope','$http',function($scope, $http) {
        $http.get('https://vakilam.org//CP/databind/shekanjeh.php').success(function(data){
            console.log(data);
            $scope.select = data['select'];
        });
        console.log($scope.select);
    }])



    ///////////////////////////////////////////// SHEKAYAT PIC

    .controller('picKeyfari', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/shekayatKeyfari.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('picHoghooghi', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/shekayatHoghooghi.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('picDivan', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/shekayatBeDivanEdalat.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('picBazresi', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/sheykayatBeSazmanBazresi.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('picMelal', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/shekayatBeSazmanMelal.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('picSayer', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('https://vakilam.org//CP/admin/shekayatPic/shekayatSayerMavared.jpeg', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('whatsapp', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('http://pollux.androidapksfree.com/polluxdata/db78d7253b7c2e5bf387b0827abd912d/com.whatsapp_v2.16.261-451387_Android-2.3.4.apk', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('whatsapp2', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('href="intent://send/+447934312746#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('telegram', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('http://www.androidapksfree.com/apk/telegram-3-13-2-8641-apk-download/', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })
    .controller('telegram2', function($scope, $cordovaInAppBrowser) {

        var options = {
            location: 'yes',
            clearcache: 'yes',
            toolbar: 'no'
        };

        $scope.openBrowser = function() {
            $cordovaInAppBrowser.open('http://telegram.me/man_vakilam', '_system', options)

                .then(function(event) {
                    // success
                })

                .catch(function(event) {
                    // error
                });
        }

    })

    //////////////////////////
    /////////////////////////LOADING CTRL
    .controller('LoadingCtrl', function($scope, $ionicLoading) {
        $scope.show = function() {
            $ionicLoading.show({
                template: 'Loading...'
            }).then(function(){
                console.log("The loading indicator is now displayed");
            });
        };
        $scope.hide = function(){
            $ionicLoading.hide().then(function(){
                console.log("The loading indicator is now hidden");
            });
        };
    });