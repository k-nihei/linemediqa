<?php
$accessToken = getenv('LINE_CHANNEL_ACCESS_TOKEN');
//���[�U�[����̃��b�Z�[�W�擾
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);
$type = $jsonObj->{"events"}[0]->{"message"}->{"type"};
//���b�Z�[�W�擾
$text = $jsonObj->{"events"}[0]->{"message"}->{"text"};
//ReplyToken�擾
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};
//���b�Z�[�W�ȊO�̂Ƃ��͉����Ԃ����I��
if($type != "text"){
	exit;
}
//���X�|���X�f�[�^�쐬
if ($text == '����' or $text == '����������' or $text == '�����ɂ�')�@ {
  $response_format_text = [
    "type" => "template",
    "altText" => "����",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "����",
      "text" => "�ǂ�Ȋ����ł���?",
      "actions" => [
          [
            "type" => "message",
            "label" => "�ˑR�̌���������",
            "text" => "�ˑR�̌���������"
          ],
          [
            "type" => "message",
            "label" => "���M�𔺂�����",
            "text" => "���M�𔺂�����"
          ],
          [
            "type" => "message",
            "label" => "�Б����̌���������",
            "text" => "�Б����̌���������"
          ],
          [
            "type" => "message",
            "label" => "�������̈��k",
            "text" => "�������̈��k"
          ]
      ]
    ]
  ];
} else if ($text == '������') {
  exit;
//�ˑR�̌���������
} else if ($text == '�ˑR�̌���������') {
  $response_format_text = [
    "type" => "template",
    "altText" => "�ˑR�̌���������",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "�ˑR�̌���������",
      "text" => "���ґ���?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40�`60��/������",
            "text" => "4060������"
          ],
          [
            "type" => "message",
            "label" => "���ґ�����",
            "text" => "���ґ�����"
          ],
          [
            "type" => "message",
            "label" => "���N�ȍ~�̏���",
            "text" => "���N�ȍ~�̏���"
          ],
          [
            "type" => "message",
            "label" => "50�Έȏ�̏���",
            "text" => "50�Έȏ�̏���"
          ]
      ]
    ]
  ];
//�ˑR�̌���������

//���M�𔺂�����
} else if ($text == '���M�𔺂�����') {
  $response_format_text = [
    "type" => "template",
    "altText" => "���M�𔺂�����",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "���M�𔺂�����",
      "text" => "���ґ���?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40�`60��/������",
            "text" => "4060������"
          ],
          [
            "type" => "message",
            "label" => "���ґ�����",
            "text" => "���ґ�����"
          ],
          [
            "type" => "message",
            "label" => "���N�ȍ~�̏���",
            "text" => "���N�ȍ~�̏���"
          ],
          [
            "type" => "message",
            "label" => "50�Έȏ�̏���",
            "text" => "50�Έȏ�̏���"
          ]
      ]
    ]
  ];
//���M�𔺂�����

//�Б����̌���������
} else if ($text == '�Б����̌���������') {
  $response_format_text = [
    "type" => "template",
    "altText" => "�Б����̌���������",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "�Б����̌���������",
      "text" => "���ґ���?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40�`60��/������",
            "text" => "4060������"
          ],
          [
            "type" => "message",
            "label" => "���ґ�����",
            "text" => "���ґ�����"
          ],
          [
            "type" => "message",
            "label" => "���N�ȍ~�̏���",
            "text" => "���N�ȍ~�̏���"
          ],
          [
            "type" => "message",
            "label" => "50�Έȏ�̏���",
            "text" => "50�Έȏ�̏���"
          ]
      ]
    ]
  ];
//�Б����̌���������

//�������̈��k
} else if ($text == '�������̈��k') {
  $response_format_text = [
    "type" => "template",
    "altText" => "�������̈��k",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "�������̈��k",
      "text" => "���ґ���?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40�`60��/������",
            "text" => "4060������"
          ],
          [
            "type" => "message",
            "label" => "���ґ�����",
            "text" => "���ґ���"
          ],
          [
            "type" => "message",
            "label" => "���N�ȍ~�̏���",
            "text" => "���N�ȍ~����"
          ],
          [
            "type" => "message",
            "label" => "50�Έȏ�̏���",
            "text" => "50�Έȏ㏗��"
          ]
      ]
    ]
  ];
//�������̈��k

//4060������
} else if ($text == '4060������') {
  $response_format_text = [
    "type" => "template",
    "altText" => "4060������",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "4060������",
      "text" => "�t������Ǐ��?",
      "actions" => [
          [
            "type" => "message",
            "label" => "���S�E�q�f�^�ӎ���Q�^���Ǐ�(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "�ӎ���Q�^���S�E�q�f",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "����E���͏�Q�^�їl�[���^�Ό����ˏ���",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "�������̓{���^�̊��ؓ��Ɂ^�̏d����",
            "text" => "A4"
          ]
      ]
    ]
  ];
//4060������

//���ґ���
} else if ($text == '���ґ���') {
  $response_format_text = [
    "type" => "template",
    "altText" => "���ґ���",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "���ґ���",
      "text" => "�t������Ǐ��?",
      "actions" => [
          [
            "type" => "message",
            "label" => "���S�E�q�f�^�ӎ���Q�^���Ǐ�(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "�ӎ���Q�^���S�E�q�f",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "����E���͏�Q�^�їl�[���^�Ό����ˏ���",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "�������̓{���^�̊��ؓ��Ɂ^�̏d����",
            "text" => "A4"
          ]
      ]
    ]
  ];
//���ґ���

//���N�ȍ~����
} else if ($text == '���N�ȍ~����') {
  $response_format_text = [
    "type" => "template",
    "altText" => "���N�ȍ~����",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "���N�ȍ~����",
      "text" => "�t������Ǐ��?",
      "actions" => [
          [
            "type" => "message",
            "label" => "���S�E�q�f�^�ӎ���Q�^���Ǐ�(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "�ӎ���Q�^���S�E�q�f",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "����E���͏�Q�^�їl�[���^�Ό����ˏ���",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "�������̓{���^�̊��ؓ��Ɂ^�̏d����",
            "text" => "A4"
          ]
      ]
    ]
  ];
//���N�ȍ~����

//50�Έȏ㏗��
} else if ($text == '50�Έȏ㏗��') {
  $response_format_text = [
    "type" => "template",
    "altText" => "50�Έȏ㏗��",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/img1.jpg",
      "title" => "50�Έȏ㏗��",
      "text" => "�t������Ǐ��?",
      "actions" => [
          [
            "type" => "message",
            "label" => "���S�E�q�f�^�ӎ���Q�^���Ǐ�(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "�ӎ���Q�^���S�E�q�f",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "����E���͏�Q�^�їl�[���^�Ό����ˏ���",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "�������̓{���^�̊��ؓ��Ɂ^�̏d����",
            "text" => "A4"
          ]
      ]
    ]
  ];
//50�Έȏ㏗��

//�C���v���b�V����
} else if ($text == 'A1') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impression�́y���������o���z�ł��B�ڍׂ́u���r���[�u�b�N���ȁE�O��2016-2017�v��J-15���Q�Ƃ��������B
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A2') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impression�́y�]���z�ł��B�ڍׂ́u���r���[�u�b�N���ȁE�O��2016-2017�v��J-35���Q�Ƃ��������B
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A3') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impression�́y�}���Γ��ᔭ��z�ł��B�ڍׂ́u���r���[�u�b�N���ȁE�O��2016-2017�v���Q�Ƃ��������B
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A4') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impression�́y�����������z�ł��B�ڍׂ́u���r���[�u�b�N���ȁE�O��2016-2017�v��J-32���Q�Ƃ��������B
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
}  else if ($text == '����' or $text == '�C���v���b�V����' or $text == '�C���v���b�V�������m�肽��') {
  $response_format_text = [
    "type" => "template",
    "altText" => "�C���v���b�V�������m�肽���H�i�͂��^�������j",
    "template" => [
        "type" => "confirm",
        "text" => "�C���v���b�V�������m�肽���H",
        "actions" => [
            [
              "type" => "message",
              "label" => "�͂�",
              "text" => "�͂�"
            ],
            [
              "type" => "message",
              "label" => "������",
              "text" => "������"
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