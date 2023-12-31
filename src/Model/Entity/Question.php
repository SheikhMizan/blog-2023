<?php
declare(strict_types=1);
namespace App\Model\Entity;

use Cake\Collection\Collection;
use Cake\ORM\Entity;
use Cake\Utility\Text;
use Cake\Filesystem\File;


/**
 * Question Entity
 *
 * @property int $id
 * @property string $question
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Answer[] $answers
 * @property \App\Model\Entity\Tagged[] $tagged
 */


class Question extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
        'question' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'answers' => true,
        'tagged' => true,
        'image' => true,
        'view_count' => true

    ];

    /**
     * When setting the title, automatically create a basic slug
     *
     * @param string $title Title to be sluggified
     * @return string
     */
    protected function _setTitle(string $title): string
    {
        if (empty($this->get('slug'))) {
            $this->set('slug',Text::slug(mb_strtolower($title)) . '-' . rand(1000, 9999));
        }

        return $title;
    }

    protected function _getVoteCount(): int
    {
        return count($this->get('votes'));
    }

    protected function _getUpvotes(): int
    {
        $votes = new Collection($this->get('votes'));
        return $votes->match(['vote' => 1])->count();
    }

    protected function _getDownvotes(): int
    {
        $votes = new Collection($this->get('votes'));
        return $votes->match(['vote' => -1])->count();
    }

}
