<?php namespace Tallpro\UserRating\Models;

use Model;

/**
 * Rating Model
 */
class Rating extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tallpro_userrating_ratings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'rating'
    ];

    /**
     * @var array Relations
     */


    public $belongsTo = [
        'comment' => ['Clake\Userextended\Models\Comment']
    ];

    public static function getFromComment($comment){

        if($comment->rating)
            return $comment->rating;

        $rating = new static;
        $rating->comment = $comment;
        $rating->save();

        $comment->rating = $rating;

        return $rating;

    }

}
