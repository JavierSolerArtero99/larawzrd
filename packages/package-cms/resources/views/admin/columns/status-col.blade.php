<div>
    <style>
        .status {
            padding: 10px;
            border-radius: 100px;
        }
        .published {
            background-color: #41D94CFF;
        }
        .unpublished {
            background-color: #B7B033FF;
        }
    </style>

    <div @class(['status', 'published' => $isPublished(), 'unpublished' => !$isPublished()])>
    </div>

</div>
