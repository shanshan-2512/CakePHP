<?php
namespace App\Model\Table;

use Cake\Utility\Text;
use \Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('articles');
    }
    public function beforeSave($event, $entity, $options)
    {
        die('Hello');
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);

            //Trime slug
            $entity->slug = substr($sluggedTitle, 0, 19);
        }
    }
}
