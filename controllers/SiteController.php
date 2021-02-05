<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\db\Main;
use app\models\db\News;
use app\models\db\Promotions;
use app\models\db\Services;
use app\models\db\Contact;

class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        $main = Main::find()
                ->where(['hide' => 0])
                ->all();

        $news = News::find()
                ->where(['hide' => 0])
                ->asArray()
                ->all();

        $promotions = Promotions::find()
                ->where(['hide' => 0, 'archive' => 0])
                ->orderBy('dateEnd DESC')
                ->asArray()
                ->all();

        $services_1 = Services::find()
                ->where(['hide' => 0, 'sort' => 1])
                ->asArray()
                ->all();

        $services_2 = Services::find()
                ->where(['hide' => 0, 'sort' => 2])
                ->asArray()
                ->all();


        return $this->render('index', compact('main', 'news', 'promotions', 'services_1', 'services_2'));
    }

    /**
      Контакты
     */
    public function actionMy_contact() {

        $model = Contact::find()
                ->where(['hide' => 0])
                ->orderBy('sort')
                ->asArray()
                ->all();                     
        
        return $this->render('my_contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

}
