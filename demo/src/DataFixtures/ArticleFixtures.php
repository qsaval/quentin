<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $z = 0;
        for ($i=1; $i <= 3 ; $i++) { 
            # code...
            $cat = new Category();
            $cat->setTitle("sujet n°$i");
    
            $manager->persist($cat);
            
            for($j = 1; $j <= mt_rand(4, 6); $j++){
                $z++;
                $article = new Article();
                $article->setTitle("Titre de l'article n°$z")
                        ->setContent("<p>Contenu de l'article n°$z</p>")
                        ->setImage("http://placehold.it/350x150")
                        ->setCreateAt(new \DateTime())
                        ->setCategory($cat);
                
                $manager->persist($article);

                for ($k=1; $k <= mt_rand(4, 10) ; $k++) { 
                    $comment = new Comment();
                    $comment->setAuthor("nom n°$k")
                            ->setContent("<p>Contenu du commentaire n°$k</p>")
                            ->setcreatedAt(new \DateTime("$k months"))
                            ->setArticle($article);
                        
                    $manager->persist($comment);
                }
                
            }
            

        }

        $manager->flush();
    }
}
