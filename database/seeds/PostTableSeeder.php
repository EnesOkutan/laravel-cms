<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Department;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->title = "Genel Duyuru";
        $post->body = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.";
        $post->department()->associate(Department::where('name','Genel')->first());
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = "Tekstil Bölümünün Dikkatine";
        $post->body = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.";
        $post->department()->associate(Department::where('name','Tekstil')->first());
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = "Teknoloji Bölümünün Dikkatine";
        $post->body = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.";
        $post->department()->associate(Department::where('name','Teknoloji')->first());
        $post->save();

        $post = new Post();
        $post->user_id = 1;
        $post->title = "Tarım Bölümünün Dikkatine";
        $post->body = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.";
        $post->department()->associate(Department::where('name','Tarım')->first());
        $post->save();
    }
}
