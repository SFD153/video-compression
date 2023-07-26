<?php
namespace App\Http\Controllers;

use FFMpeg;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Format\Video\X264;
use ProtoneMedia\LaravelFFMpeg\FFMpeg\CopyFormat;
use FFMpeg\Filters\Video\VideoFilters;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class VideoUploadController extends Controller
{
    public function show()
    {
        return view('upload');
    }

    public function compression(Request $request)
    {
        FFMpeg::fromDisk('public') // video-compression\storage\app\public\converter.mp4
            ->open('converter.mp4')
            ->addFilter(function (VideoFilters $filters) {
                $originalDimensions = FFMpeg::fromDisk('public')->open('converter.mp4')->getVideoStream()->getDimensions();
                $aspectRatio = $originalDimensions->getWidth() / $originalDimensions->getHeight();
                $width = $originalDimensions->getWidth(); // Set your desired width
                $height = intval($width / $aspectRatio);

                if ($height % 2 !== 0) {
                    $height--;
                }

                $filters->resize(new \FFMpeg\Coordinate\Dimension($width, $height));
            })
            ->export()
            ->toDisk('public')
            ->inFormat((new X264('libmp3lame', 'libx264'))->setKiloBitrate(500)) // Set desired bitrate (e.g., 500 Kbps)
            // ->inFormat(new \FFMpeg\Format\Video\X264)
            ->save('small_steve.mp4');
    } 
}