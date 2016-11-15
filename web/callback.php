<?php
$accessToken = getenv('LINE_CHANNEL_ACCESS_TOKEN');
//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);
$type = $jsonObj->{"events"}[0]->{"message"}->{"type"};
//メッセージ取得
$text = $jsonObj->{"events"}[0]->{"message"}->{"text"};
//ReplyToken取得
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};
//メッセージ以外のときは何も返さず終了
if($type != "text"){
	exit;
}
//返信データ作成
if ($text == 'はい') {
  $response_format_text = [
    "type" => "template",
    "altText" => "主訴はどれですか?",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "主訴はどれですか?",
      "text" => "下から選択してください",
      "actions" => [
          [
            "type" => "message",
            "label" => "頭痛",
            "text" => "頭痛"
          ],
          [
            "type" => "message",
            "label" => "失神",
            "text" => "失神"
          ],
          [
            "type" => "message",
            "label" => "意識障害",
            "text" => "意識障害"
          ],
          [
            "type" => "message",
            "label" => "違うやつ",
            "text" => "他の事"
          ]
      ]
    ]
  ];
} else if ($text == 'いいえ') {
  exit;
} else if ($text == '頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "mediLink",
    "template" => [
      "type" => "carousel",
      "columns" => [
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/mail.png",
            "title" => "主訴1",
            "text" => "こちらですか？",
            "actions" => [
              [
                  "type" => "message",
                  "label" => "突然の激しい頭痛",
                  "text" => "突然の激しい頭痛"
              ],
              [
                  "type" => "message",
                  "label" => "突然の頭痛",
                  "text" => "突然の頭痛"
              ],
              [
                  "type" => "message",
                  "label" => "発熱を伴う頭痛",
                  "text" => "発熱を伴う頭痛"
              ]
            ]
          ],
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/jushin.png",
            "title" => "主訴2",
            "text" => "それともこちら？（２つ目）",
            "actions" => [
              [
                  "type" => "message",
                  "label" => "突然の頭痛/片側性の激しい眼痛",
                  "text" => "片側性の激しい眼痛"
              ],
              [
                  "type" => "message",
                  "label" => "側頭部の圧痛を伴う拍動性の頭痛",
                  "text" => "側頭部の圧痛を伴う拍動性の頭痛"
              ],
              [
                  "type" => "message",
                  "label" => "締め付けられる感じの頭痛",
                  "text" => "締め付けられる感じの頭痛"
              ]
            ]
          ],
          [
            "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/password.jpg",
            "title" => "主訴3",
            "text" => "はたまたこちら？（３つ目）",
            "actions" => [
              [
                  "type" => "message",
                  "label" => "発作反復性で片側優位な拍動性頭痛",
                  "text" => "発作反復性で片側優位な拍動性頭痛"
              ],
              [
                  "type" => "message",
                  "label" => "片側眼周囲から側頭部にかけての高度な頭痛",
                  "text" => "片側眼周囲から側頭部にかけての高度な頭痛"
              ],
              [
                  "type" => "message",
                  "label" => "前屈で悪化する頭痛",
                  "text" => "前屈で悪化する頭痛"
              ]
            ]
          ]
      ]
    ]
  ];
//突然の激しい頭痛の患者像
} else if ($text == '突然の激しい頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "患者像は？
			・40～60代男性
			・高血圧
			（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "患者像は？
・40～60代男性
・高血圧",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "突然の激しい頭痛の患者像(はい)"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "突然の激しい頭痛の患者像(いいえ)"
            ]
        ]
    ]
  ];
//付随する症状
}  else if ($text == '突然の激しい頭痛の患者像(はい)') {
  $response_format_text = [
    "type" => "template",
    "altText" => "付随する症状？
・悪心/嘔吐
・意識障害
（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "突然の激しい頭痛の付随する症状？
・悪心/嘔吐
・意識障害",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "突然の激しい頭痛の付随する症状(はい)"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "突然の激しい頭痛の付随する症状(いいえ)"
            ]
        ]
    ]
  ];
//インプレッション
} else if ($text == '突然の激しい頭痛の付随する症状(はい)') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionはくも膜下出血です。詳細は「レビューブック内科・外科2016-2017」のJ-15を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
//突然の激しい頭痛の患者像
} else if ($text == '突然の頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "患者像は？
			・高血圧
			・高齢者
			（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "患者像は？
・高血圧
・高齢者",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "突然の頭痛の患者像(はい)"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "突然の頭痛の患者像(いいえ)"
            ]
        ]
    ]
  ];
//付随する症状
}  else if ($text == '突然の頭痛の患者像(はい)') {
  $response_format_text = [
    "type" => "template",
    "altText" => "付随する症状？
・巣症状
・意識障害
・めまい
・悪心/嘔吐
（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "突然の頭痛の付随する症状？
・巣症状
・意識障害
・めまい
・悪心/嘔吐",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "突然の頭痛の付随する症状(はい)"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "突然の頭痛の付随する症状(いいえ)"
            ]
        ]
    ]
  ];
//インプレッション
} else if ($text == '突然の頭痛の付随する症状(はい)') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionは⋆脳内出血です。詳細は「レビューブック内科・外科2016-2017」のJ-13を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
//突然の激しい頭痛の患者像ここまで
//最初のレスポンス
}  else if ($text == '質問') {
  $response_format_text = [
    "type" => "template",
    "altText" => "インプレッションが知りたい？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "インプレッションが知りたい？",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "はい"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "いいえ"
            ]
        ]
    ]
  ];
}
$post_data = [
	"replyToken" => $replyToken,
	"messages" => [$response_format_text]
	];
$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charser=UTF-8',
    'Authorization: Bearer ' . $accessToken
    ));
$result = curl_exec($ch);
curl_close($ch);