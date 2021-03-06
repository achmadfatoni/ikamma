<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'list'  => Contact::all(),
        ];
        return view('contacts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
//            'no_hp' => 'unique:contacts',
        ]);

        Contact::create($request->all() + ['is_active' => true]);

        return redirect('contacts')->with('success','Contact created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        $data = [
            'contact' => $contact,
        ];
        return view('contacts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $this->validate($request, [
            'name'  => 'required',
//            'no_hp' => 'unique:contacts,id,'.$id,
        ]);

        $contact->update($request->all());

        return redirect('contacts')->with('success','Contact update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contacts')->with('success','Contact Deleted');
    }

    public function generate(Request $request)
    {
        $data = '';
        $contacts = Contact::all();

        if ($request->exists('is_surabaya')) {
            $contacts = Contact::where('is_surabaya', 1)->get();
        }

        $contacts = $contacts->filter(function ($contact) {
            return $contact->no_hp != null;
        });

        echo 'Jumlah total nomor ' . count($contacts);
        echo '<br>';
    
        foreach($contacts->chunk(10) as $items)
        {
            echo 'Jumlah nomor ' . count($items);
            echo '<br>';
            $no = 1;
            $data = '';
            foreach ($items as $contact) {
                if($contact->no_hp != null){
                    if ($no == 1){
                        $data = $contact->no_hp;
                    }else{
                        $data = $data .', '.$contact->no_hp;
                    }
                }
                $no++;
            }

            echo 'No hp <br>';
            echo $data;
            echo '<br>';
        }
    }
}
