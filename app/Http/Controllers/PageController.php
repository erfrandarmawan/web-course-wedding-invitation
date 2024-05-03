<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = [
            "title" => "Wedding of Name1 & Name2",
            "main_image" => "https://ik.imagekit.io/b3amk7ihm/1707558835394.webp",
            "wedding_date" => "2025-02-26 00:00:00",
            "groom_name" => "Groom Name",
            "bride_name" => "Bride Name",
            "groom_photo" => "https://placehold.co/300?text=Groom+Photo",
            "bride_photo" => "https://placehold.co/300?text=Bride+Photo",
            "groom_father_name" => "groom_father_name",
            "groom_mother_name" => "groom_mother_name",
            "bride_father_name" => "bride_father_name",
            "bride_mother_name" => "bride_mother_name",
            "groom_social_media" => "https://instagram.com/erfrandarmawan",
            "bride_social_media" => "https://instagram.com/erfrandarmawan",
            "akad_start_date" => "2025-02-26 10:00:00",
            "akad_end_date" => "2025-02-26 11:00:00",
            "akad_place_name" => "Gedung ABC",
            "akad_address" => "Jl. 12345",
            "akad_maps" => "https://maps.google.com",
            "reception_start_date" => "2025-02-26 13:00:00",
            "reception_end_date" => "2025-02-26 15:00:00",
            "reception_place_name" => "Gedung XYZ",
            "reception_address" => "Jl. XYZ 123",
            "reception_maps" => "https://maps.google.com",
            "gift_qr_image" => "https://placehold.co/300?text=QR+Image",
            "gallery" => [
                ["link" => "https://placehold.co/300?text=Gallery 1"],
                ["link" => "https://placehold.co/300?text=Gallery 2"],
                ["link" => "https://placehold.co/300?text=Gallery 3"],
                ["link" => "https://placehold.co/300?text=Gallery 4"],
                ["link" => "https://placehold.co/300?text=Gallery 5"],
            ],
            "journey" => [
                [
                    "title" => "Title 1",
                    "story" => "Story 1",
                    "date" => "2020-07-10 00:00:00"
                ],
                [
                    "title" => "Title 2",
                    "story" => "Story 2",
                    "date" => "2021-08-01 00:00:00"
                ],
                [
                    "title" => "Title 3",
                    "story" => "Story 3",
                    "date" => "2021-09-15 00:00:00"
                ],
                [
                    "title" => "Title 4",
                    "story" => "Story 4",
                    "date" => "2022-05-11 00:00:00"
                ],
                [
                    "title" => "Title 5",
                    "story" => "Story 5",
                    "date" => "2023-07-21 00:00:00"
                ]
            ]
        ];

        $data["comments"] = Comment::all()->sortByDesc('created_at');
        
        return view('theme', ['data' => (object) $data]);
    }
}
