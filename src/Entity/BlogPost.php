<?php

namespace App\Entity;

class BlogPost
{
    public const STATUS_DRAFTED = 'drafted';
    public const STATUS_NEEDS_REVIEW = 'needs_review';
    public const STATUS_NEEDS_SPELL_CHECK = 'needs_spellcheck';
    public const STATUS_REVIEWED = 'reviewed';
    public const STATUS_SPELL_CHECKED = 'spellchecked';
    public const STATUS_NEEDS_CHANGES = 'needs_changes';
    public const STATUS_NEEDS_CORRECTION = 'needs_correction';
    public const STATUS_PUBLISHED = 'published';

    public const TRANSITION_SUBMIT = 'submit';
    public const TRANSITION_REQUEST_CHANGES = 'request_changes';
    public const TRANSITION_REQUEST_CORRECTION = 'request_correction';
    public const TRANSITION_APPLY_CHANGES = 'apply_changes';
    public const TRANSITION_APPLY_CORRECTION = 'apply_correction';
    public const TRANSITION_REVIEW = 'review';
    public const TRANSITION_SPELL_CHECK = 'spellcheck';
    public const TRANSITION_PUBLISH = 'publish';

    private $status;

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }
}
