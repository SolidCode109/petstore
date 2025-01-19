<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class PetStoreController extends ApiController
{

    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://petstore.swagger.io/v2/',
            'timeout'  => 10.0,
        ]);
    }

    public function getPetsByStatus()
    {
        try {
            $response = $this->client->get('pet/findByStatus', [
                'query' => ['status' => 'available'],
            ]);

            $pets = json_decode($response->getBody(), true);

            return view('pets.allPetsByStatus', compact('pets'));
        } catch (\Exception $e) {

            return view('pets.allPetsByStatus')->with('error', $e->getMessage());
        }
    }

    public function getPetsById($petId)
    {

        try {
            $response = $this->client->get("pet/{$petId}", ['query' => ['id' => $petId]]);

            $petsByID = json_decode($response->getBody(), true);

            return view('pets.getPetsByID', compact('petsByID'));
        } catch (\Exception $e) {
            return view('pets.getPetsByID')->with('error', $e->getMessage());
        }
    }


    public function addPet(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'category_id' => 'required|integer',
            'category_name' => 'required|string',
            'name' => 'required|string',
            'photoUrls' => 'array',
            'tags' => 'nullable|string',
            'status' => 'required|string|in:available,pending,sold',
        ]);

        try {
            $newPet = [
                "id" => $validated['id'],
                "category" => [
                    "id" => $validated['category_id'],
                    "name" => $validated['category_name'],
                ],
                "name" => $validated['name'],
                "photoUrls" => $validated['photoUrls'] ?? [],
                "tags" => $validated['tags'] ?? [],
                "status" => $validated['status'],
            ];

            $response = $this->client->post("pet", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-CSRF-TOKEN' => csrf_token(),
                ],
                'json' => $newPet,
            ]);

            $result = json_decode($response->getBody(), true);

            return view('pets.addPet', compact('addPet'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function updatePet(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'category.id' => 'required|integer',
            'category.name' => 'required|string',
            'name' => 'required|string',
            'photoUrls' => 'array',
            'tags' => 'nullable|regex:/^(\d+\s*,\s*[a-zA-Z0-9]+\s*;?\s*)*$/',
            'status' => 'required|string|in:available,pending,sold',
        ]);

        try {
            $updatePet = [
                "id" => $validated['id'],
                "category" => [
                    "id" => $validated['category_id'],
                    "name" => $validated['category_name'],
                ],
                "name" => $validated['name'],
                "photoUrls" => $validated['photoUrls'] ?? [],
                "tags" => $validated['tags'] ?? [],
                "status" => $validated['status'],
            ];

            $response = $this->client->put("pet", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-CSRF-TOKEN' => csrf_token(),
                ],
                'json' => $updatePet
            ]);

            $result = json_decode($response->getBody(), true);

            return view('[pets.updatePet]', compact('updatePet'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



    public function deletePet($petId)
    {
        try {
            $response = $this->client->delete("pet/{$petId}", ['query' => ['id' => $petId]]);

            return view('pets.deletePet', compact('petId'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }










}
