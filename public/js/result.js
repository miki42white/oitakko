const data = [
  {name:"生石保育所", lat:	33.244042996788814	, lng:	131.58789147137426	},
  {name:"新春日町保育所", lat:	33.23369099966839	, lng:	131.59558662479412	},
  {name:"しらかば保育園", lat:	33.229071947476314	, lng:	131.59695604808013	},
  {name:"やはたこども園", lat:	33.24764415980329	, lng:	131.5791701554848	},
  {name:"南春日保育所", lat:	33.237989638300334	, lng:	131.59339279411103	},
  {name:"愛保育園", lat:	33.23274711277946	, lng:	131.60336004808167	},
  {name:"そらいろ保育園", lat:	33.231958112797486	, lng:	131.5999317327389	},
  {name:"第二王子町保育園", lat:	33.24313552074789	, lng:	131.59677594808602	},
  {name:"上野の森口保育園", lat:	33.23272649801704	, lng:	131.60323011739675	},
  {name:"浜町保育所", lat:	33.24922990440365	, lng:	131.6056033941157	},
  {name:"金池保育所", lat:	33.231294120432054	, lng:	131.61278660945067	},
  {name:"桜町こども園", lat:	33.24103782765047	, lng:	131.6021064327427	},
  {name:"桜ケ丘保育所", lat:	33.23058096496754	, lng:	131.60623656145003	},
  {name:"住吉保育所", lat:	33.24882839961079	, lng:	131.61274747137617	},
  {name:"泉町保育園", lat:	33.25021242322027	, lng:	131.61220661740413	},
  {name:"上野愛光保育園", lat:	33.228779843987816	, lng:	131.61735550205265	},
  {name:"上野愛光第二保育園", lat:	33.22804596216034	, lng:	131.61767717876455	},
  {name:"王子町保育園", lat:	33.244323350539865	, lng:	131.59362082309525	},
  {name:"中央町保育園", lat:	33.23746107435883	, lng:	131.60605727876847	},
  {name:"ひまわり幼稚園", lat:	33.24711099145481	, lng:	131.61459688594604	},
  {name:"かがやきの森こども園", lat:	33.23194752370793	, lng:	131.6147037941086	},
  {name:"カトリック海星幼稚園", lat:	33.23975361729008	, lng:	131.60384738671488	},
  {name:"城南保育園", lat:	33.22806744590205	, lng:	131.58174369761946	},
  {name:"府内保育園", lat:	33.206448482689375	, lng:	131.60206412478283	},
  {name:"南大分保育園", lat:	33.21436559695775	, lng:	131.59714305547095	},
  {name:"コスモスこども園", lat:	33.209753314457224	, lng:	131.5976235219093	},
  {name:"ふたばこども園", lat:	33.21797426442043	, lng:	131.6149676247876	},
  {name:"こどもの森すぷらうと", lat:	33.21870605963987	, lng:	131.60617109410308	},
  {name:"スマイス・キッズ保育園", lat:	33.218112865971186	, lng:	131.60293100944526	},
  {name:"ごとう幼稚園", lat:	33.20660990491887	, lng:	131.59240366341336	},
  {name:"ゆりかごこども園", lat:	33.21372332241159	, lng:	131.58803428670407	},
  {name:"大分いちごこども園", lat:	33.211436731508165	, lng:	131.5888330941001	},
  {name:"南大分に笑顔咲くえん　わらひ", lat:	33.20696228496578	, lng:	131.59760088670131	},
  {name:"田中南保育園", lat:	33.2197637481045	, lng:	131.59334684907373	},
  {name:"愛隣幼稚園", lat:	33.21817974780367	, lng:	131.60162241739087	},
  {name:"小野鶴こばと保育所", lat:	33.20014799918661	, lng:	131.5695032173832	},
  {name:"富士見ヶ丘あすなろ保育園", lat:	33.18561156171267	, lng:	131.5475577020347	},
  {name:"宗方こども園", lat:	33.19740229844173	, lng:	131.5791243866973	},
  {name:"宗方東保育園", lat:	33.20287795630129	, lng:	131.57936544012372	},
  {name:"稙田こども園", lat:	33.19206351536948	, lng:	131.57056724874457	},
  {name:"アソカ保育園", lat:	33.18733624757613	, lng:	131.60240206340526	},
  {name:"よいこのくに保育園", lat:	33.19696256836499	, lng:	131.6026217094365	},
  {name:"スマイスセレソンこども園", lat:	33.189773026870306	, lng:	131.59396271737893	},
  {name:"おぎの台保育園", lat:	33.19318911870218	, lng:	131.57289527875008	},
  {name:"みつよし園", lat:	33.19851306409562	, lng:	131.60564128669776	},
  {name:"もみの木保育園", lat:	33.213363297061576	, lng:	131.56776413273124	},
  {name:"めいりん保育園", lat:	33.1850334019931	, lng:	131.56130714340765	},
  {name:"富士見が丘幼稚園", lat:	33.185706852217834	, lng:	131.55120330445553	},
  {name:"緑が丘こども園", lat:	33.17794753507725	, lng:	131.52650706340154	},
  {name:"かくこどもえん", lat:	33.21174034520031	, lng:	131.56282987875773	},
  {name:"東稙田こども園", lat:	33.18779248945573	, lng:	131.59449079409023	},
  {name:"稙田ほまれこども園", lat:	33.20059065294547	, lng:	131.58482527875316	},
  {name:"わさだりすの森保育園", lat:	33.19878255044319	, lng:	131.58196746341	},
  {name:"のだ山幼稚園", lat:	33.204308113284874	, lng:	131.53826409409706	},
  {name:"敷戸南保育所", lat:	33.18595684447204	, lng:	131.62567604806227	},
  {name:"寒田ひめやま保育園", lat:	33.18639175648684	, lng:	131.60737004806248	},
  {name:"敷戸ふない幼稚園", lat:	33.18859363571314	, lng:	131.62545394806338	},
  {name:"しきどこども園", lat:	33.18816782451923	, lng:	131.62214321737838	},
  {name:"あかつき保育所", lat:	33.16788739609879	, lng:	131.63653762476673	},
  {name:"旦の原保育園", lat:	33.17046655167559	, lng:	131.61639067874066	},
  {name:"河原内保育所", lat:	33.11725746385906	, lng:	131.59825296337618	},
  {name:"のつはる認定こども園", lat:	33.16493150761065	, lng:	131.52901804805344	},
  {name:"なないろ保育室", lat:	33.23458621693277	, lng:	131.61126944808254	},
  {name:"ちゅうりっぷ保育室", lat:	33.233668338015406	, lng:	131.61504041113767	},
  {name:"マミー保育室", lat:	33.22707862174737	, lng:	131.59679901062677	},
  {name:"まるも保育室", lat:	33.21023424384672	, lng:	131.6063993480723	},
  {name:"012保育室", lat:	33.20746106497192	, lng:	131.5914365480712	},
  {name:"ゆめっこ保育園", lat:	33.20675907950275	, lng:	131.5976004980709	},
  {name:"遊々舎", lat:	33.19566846895723	, lng:	131.60294473272384	},
  {name:"ゆめのほし保育園", lat:	33.23605507442492	, lng:	131.6138838787679	},
  {name:"中島西保育園", lat:	33.24392111332512	, lng:	131.61137986342874	},
  {name:"中春日保育園", lat:	33.240131449130686	, lng:	131.593956294112	},
  {name:"ニチイキッズ西大分保育園", lat:	33.239748646810796	, lng:	131.59106276342703	},
  {name:"わくわくの森保育園", lat:	33.20433349577637	, lng:	131.53710372533052	},
  {name:"大道にじいろ保育園", lat:	33.230283840105116	, lng:	131.60034734808067	},
  {name:"湯屋すくすく館", lat:	33.187967433691405	, lng:	131.54151846340542	},
  {name:"下郡保育所", lat:	33.22877055789399	, lng:	131.62938665547696	},
  {name:"滝尾保育園", lat:	33.2171477562775	, lng:	131.63280896341766	},
  {name:"津守あすなろこども園", lat:	33.21342440136244	, lng:	131.61902697875848	},
  {name:"森のさんぽ道", lat:	33.223114207282926	, lng:	131.63272826342018	},
  {name:"キッドワールドこども園", lat:	33.220652822552765	, lng:	131.62528483946653	},
  {name:"キッドワールドセカンドこども園", lat:	33.20740625817541	, lng:	131.6345114940984	},
  {name:"テスの木", lat:	33.22655797582483	, lng:	131.6371085634215	},
  {name:"裏川保育所", lat:	33.2365418738172	, lng:	131.6318201327408	},
  {name:"じょうとうこども園", lat:	33.245888869403196	, lng:	131.64497696342949	},
  {name:"天心保育園", lat:	33.24119081309587	, lng:	131.63778487877	},
  {name:"東舞鶴保育園", lat:	33.248440161118126	, lng:	131.63056063274576	},
  {name:"まいづる保育園", lat:	33.240953454271065	, lng:	131.63365187876997	},
  {name:"めぐみ保育園", lat:	33.252314022918014	, lng:	131.66161196343222	},
  {name:"たんぽぽ保育園", lat:	33.24694129369177	, lng:	131.63519696343008	},
  {name:"きらきら保育園", lat:	33.23974393503229	, lng:	131.62813787876942	},
  {name:"とぜん幼稚園", lat:	33.24529739210608	, lng:	131.6515228634293	},
  {name:"しらとり子ども園", lat:	33.24286401609757	, lng:	131.66407326342832	},
  {name:"ももぞのこども園", lat:	33.23701087861183	, lng:	131.67259734808346	},
  {name:"なかつる保育園", lat:	33.24463579862906	, lng:	131.62939897877146	},
  {name:"アイリスこども園", lat:	33.249050774624045	, lng:	131.66424627877333	},
  {name:"ひおか保育園", lat:	33.250855926814054	, lng:	131.65723924808918	},
  {name:"明野しいのみ保育園", lat:	33.231398126629074	, lng:	131.64651113273868	},
  {name:"明野台こども園", lat:	33.22748256861396	, lng:	131.66870046342189	},
  {name:"慶光保育園", lat:	33.21842335698037	, lng:	131.66455304807573	},
  {name:"明野こども園", lat:	33.229640664917596	, lng:	131.6504952211401	},
  {name:"たかおこども園", lat:	33.20955395082696	, lng:	131.66210414807205	},
  {name:"たかお第二こども園", lat:	33.20755930155708	, lng:	131.66469684451656	},
  {name:"こころの森こども園", lat:	33.205034263990775	, lng:	131.67072434807022	},
  {name:"げんきな森中央保育園", lat:	33.20603609484813	, lng:	131.66609486341298	},
  {name:"カトリック明野幼稚園", lat:	33.23322600463338	, lng:	131.65527604808184	},
  {name:"小中島保育園", lat:	33.248054064925206	, lng:	131.69634904808808	},
  {name:"洗心保育園", lat:	33.25159385163558	, lng:	131.68044110945922	},
  {name:"鶴崎保育園", lat:	33.245182417786594	, lng:	131.68182062479897	},
  {name:"鶴崎同光園", lat:	33.24059454475546	, lng:	131.68944053274257	},
  {name:"松岡保育園", lat:	33.179557414884556	, lng:	131.6686991327171	},
  {name:"龍華保育園", lat:	33.22718366841067	, lng:	131.68201174807933	},
  {name:"とりい保育園", lat:	33.193314430562246	, lng:	131.66854913272286	},
  {name:"七海保育園", lat:	33.22646327775759	, lng:	131.67944596342144	},
  {name:"もりまち幼稚園", lat:	33.22553238677345, 	lng:	131.67692536342108	},
  {name:"みどり幼稚園", lat:	33.21985486137996	, lng:	131.67280494450952	},
  {name:"高田のぞみこども園", lat:	33.214151050305944	, lng:	131.68952175547068	},
  {name:"いえじま保育園", lat:	33.25771755632631	, lng:	131.69468221740723	},
  {name:"ほがらか園", lat:	33.196021410066535	, lng:	131.6753126742877	},
  {name:"皆春あけぼのこども園", lat:	33.23486158716912	, lng:	131.67787294808252	},
  {name:"カトリック鶴崎幼稚園", lat:	33.239089370351756	, lng:	131.68051734808438	},
  {name:"さくら保育園", lat:	33.202690490404706	, lng:	131.66763967772783	},
  {name:"みのり保育園", lat:	33.155520462360506	, lng:	131.6571063729207	},
  {name:"キッズアカデミー保育園", lat:	33.15445297393668	, lng:	131.6714362094188	},
  {name:"吉野こども園", lat:	33.117931089779155	, lng:	131.69504453269158	},
  {name:"かんがるー保育園", lat:	33.16613339608725	, lng:	131.639165148054	},
  {name:"ひよこのくにランド保育園", lat:	33.24847406078388	, lng:	131.7166821327458	},
  {name:"かるがも保育園", lat:	33.24835216198587	, lng:	131.73107104808818	},
  {name:"たけのこ保育園", lat:	33.236048674493276	, lng:	131.73412776342545	},
  {name:"よいこの森こども園(本園）", lat:	33.2473678536057	, lng:	131.70750921740287	},
  {name:"よいこの森こども園（角子原分園）", lat:	33.2493793026237	, lng:	131.71397284808856	},
  {name:"大在こども園", lat:	33.24957383004188	, lng:	131.71999221740387	},
  {name:"大在愛育保育園", lat:	33.24193053898004	, lng:	131.721040363428	},
  {name:"なかまの森こども園", lat:	33.24824772545779	, lng:	131.71084027877288	},
  {name:"和光こども園", lat:	33.23846995548246	, lng:	131.74212870513585	},
  {name:"みんなの森こども園", lat:	33.21415811278939	, lng:	131.71842113273146	},
  {name:"坂ノ市こども園", lat:	33.238358949822725	, lng:	131.76072579411127	},
  {name:"こざいこども園", lat:	33.22039293959719	, lng:	131.74331884807654	},
  {name:"佐賀関保育所", lat:	33.24794506600001	, lng:	131.87464004808803	},
  {name:"どうわこども園", lat:	33.24211144428117	, lng:	131.79821696342805	},
  {name:"青空保育室", lat:	33.24044983983349	, lng:	131.67595297033085	},
  {name:"なかよし保育室", lat:	33.2186017548421	, lng:	131.68283944472608	},
  {name:"たかじょうえん。", lat:	33.24721311061981	, lng:	131.64667370151176	},
  {name:"ゆめのね保育園", lat:	33.24554907303251	, lng:	131.72334826342941	},
  {name:"みどり第二保育所", lat:	33.22330137421986	, lng:	131.68293296531988	},
  {name:"キッドワールドサード保育園", lat:	33.21976334377773	, lng:	131.6257360480763	},
  {name:"シャインキッズ", lat:	33.24471597399891	, lng:	131.72847114808658	},
  {name:"夢のくに保育園", lat:	33.2416543213196	, lng:	131.7434364634278	},
  {name:"ナーサリー　ロペ", lat:	33.226364479630895	, lng:	131.6368184287639	},
  {name:"へつぎ保育園", lat:	33.1610459745944	, lng:	131.6496949480519	},
  {name:"やまばと夢保育園", lat:	33.1550040524823	, lng:	131.63174504804945	},
  {name:"大分どんぐりのもり保育園", lat:	33.24992605658174	, lng:	131.65298854808884	},
  {name:"オアシスにじいろ保育園", lat:	33.23944834397274	, lng:	131.695503632742	}
]

let marker =[];
let infoWindow =[];

function initMap() {

  map = document.getElementById("map");

  let center = {lat: 33.23906, lng: 131.61272};

  var styles =[
      {
        "featureType": "poi.business",
        "elementType": "labels",
        "stylers": [{"color": "#b5b5b5" }]
      },
      {
        "featureType": "poi.business",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.medical",
        "elementType": "labels",
        "stylers": [{"color": "#c9c9c9"}]
      },
      {
        "featureType": "poi.medical",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.text",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "poi.school",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#ffffff"}]
      }
    ];

  opt = {
      zoom: 15,
      center: center,
      mapTypeControl: false,
      scrollwheel: false,
      styles: styles,
  };

  mapObj = new google.maps.Map(map, opt);

  for (var i = 0; i < data.length; i++){
    const image = "img/marker.png";
    const name = data[i]['name'];
    let markerLatLng = new google.maps.LatLng({lat: data[i]['lat'], lng:data[i]['lng']});
    marker[i] = new google.maps.Marker({
      position: markerLatLng,
      map: mapObj,
      icon: {
        url: image,
        scaledSize: new google.maps.Size(25,45)
      }
    });

    infoWindow[i] = new google.maps.InfoWindow({
      content: `<a href=/detail/${name}>${data[i]['name']}</a>`
    });
    markerEvent(i);
  }
  function markerEvent(i){
    // marker[i].addListener('mouseover', function(){
    //   infoWindow[i].open(map,marker[i]);
    // });
    // marker[i].addListener('mouseout', function(){
    //   infoWindow[i].close(map,marker[i]);
    // });
    marker[i].addListener('click', function(){
      infoWindow[i].open(map,marker[i]);
    });

  }


}