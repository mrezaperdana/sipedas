<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Clustering\KMeans;
use App\Models\User;

class ClusteringController extends Controller
{
    public function showDistricts()
    {
        $users = User::all();
        $districtsCount = 4;
        $usersPerDistrict = ceil(count($users) / $districtsCount);

        $data = [];
        foreach ($users as $user) {
            $data[] = [$user->lat, $user->long];
        }

        $kmeans = new KMeans($districtsCount);
        $clusters = $kmeans->cluster($data);

        $districts = [];
        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $cluster = $clusters[$i];
            if (!isset($districts[$cluster])) {
                $districts[$cluster] = [
                    'district' => $user->district,
                    'users' => [],
                ];
            }
            if (count($districts[$cluster]['users']) < $usersPerDistrict) {
                $districts[$cluster]['users'][] = $user;
            }
        }

        return view('home', ['districts' => $districts]);
    }
}
