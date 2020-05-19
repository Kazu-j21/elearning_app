# URL
* http://aki-elearning.herokuapp.com/

* For login, you can use
    * email: test@gmail.com
    * password: testtest

# Project Details
Project name: Fels E-learning 

Project description: 

A language e-learning web application that lets users answer a group of words with a corresponding choice. Users can be able to interact with other users. Keeping track of their performance, as well as other people’s performance. This project will also have its own administrator section, to manage categories as well as other user’s information.

主にLaravelとBootstrapを使って作成したE-learning Systemになります。
ユーザーが三択の問題を作り、それに対しユーザー自身、また他ユーザーが回答できるものになっています。また回答後、回答した記録がアクティビティログとしてダッシュボードに自動で投稿される仕組みになっています。また他ユーザーのフォローもでき、フォロー後、他ユーザーのアクティビティもダッシュボードに投稿される仕組みになっています。


制作期間はおよそ1か月です。


# Project Functionalities

* User signup
* User log in
* Follow/Unfollowing function
* Lesson answering function
* Activity log - Following and lesson activities
* Category management in Admin page

機能：

* ユーザー登録
* ログイン/ログアウト
* フォロー/アンフォロー
* メンバーリスト表示機能
* レッスン回答機能
* ユーザー自身の回答ログの表示機能
* フォローユーザーのアクティビティログの表示機能
* 管理画面での三択問題の作成、編集、削除機能


# Project Contents 
・Dashboard (homepage when logged in)
* User can see how many words are learned
* User can see activity logs from the user and the following users
* User can see the number of followers and following users

・Profile page
* User can see profile details such as name and avatar
* User can see his own activities
* User can see the number of followers and following users

・Member list page
* User can see all users with avatar and name
* User can follow/unfollow other users
* The page has a pagination function

・Category list page
* User can see all categories with title and description
* User can start a lesson
* The page has a pagination function

    ・Lesson 
    * User can answer by selecting choices of words
    * User can see progress of the lesson
    * The page has a pagination function that paginate automatically after a user answer

    ・Lesson result page
    * User can see the result by the end of a lesson

・Admin pages for  :
* Categories : CRUD
* Words : CRUD
* Words options and answers  : CRUD

# Requirement
* Laravel 5.7.28
* Bootstrap 4
* Html/Css
* MySQL
* Docker/docker-compose
* Heroku
