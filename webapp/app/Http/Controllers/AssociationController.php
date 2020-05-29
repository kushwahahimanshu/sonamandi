<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Auth;

use App\Association;
use App\Metatag;

use App\AssociationMember;

class AssociationController extends Controller
{
    public function addAssociation() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add Association';
    	//Return response
    	return view('webviews/admin_add_association', $this->data);
    }

    public function addAssociationSubmit(Request $req) {
    	//Submit to DB
    	$reg = new Association;
    	$reg->name = $req->name;
        $reg->metatag = $req->metatag; 

    	$reg->save();
    	//Return Response
    	return back()->with('success', 1);
    }

    public function editMetaTag($id)
    {
        $this->data['page_title']='Edit Meta Tag';
        $this->data['flag']=16;
        $this->data['members']= Metatag::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }

    public function updatemetatag(Request $req)
    {    
        Metatag::where('id',$req->id)->update([
            'name'=>$req->name, 
            'metatag'=>$req->metatag

        ]);
        
        return back()->with('success', 1);
    }
    public function viewAssociations() {
    	//Setting Page Title
    	$this->data['page_title'] = 'Add Association';
    	//Fetching Data
    	$this->data['associations'] = Association::orderBy('name', 'asc')->get();
    	//Return response
    	return view('webviews/admin_view_associations', $this->data);
    }

    public function addAssociationMember() {
    	//Setting Page Title
    	$this->data['page_title'] = 'View Associations';
    	//Fetching Data
    	$this->data['associations'] = Association::orderBy('name', 'asc')->get();
    	//Return response
    	return view('webviews/admin_add_association_member', $this->data);
    }

    public function addAssociationMemberSubmit(Request $req) {
    	//Uploading Image
    	$file = $req->file('image');
        $filename = 'member'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../images/members');
        $file->move($destinationPath, $filename);
    	//Submit to Database
    	$reg = new AssociationMember;
    	$reg->image = 'images/members/'.$filename;
    	$reg->name = $req->name;
        $reg->designation = $req->designation;
    	$reg->position = $req->position;
    	$reg->association = $req->association;
    	$reg->save();

    	//Return Response
    	return back()->with('success', 1);
    }

    public function viewAssociationMembers() {
    	//Setting Page Title
    	$this->data['page_title'] = 'View Association Members';
    	//Fetching Data
    	$this->data['members'] = AssociationMember::orderBy('association', 'asc')->orderBy('position', 'asc')->get();
    	//Return response
    	return view('webviews/admin_view_association_members', $this->data);
    }

    public function editAssociationMembers($id)
    {
        $this->data['page_title']='Edit Association Members';
        $this->data['flag']=1;
        $this->data['members']= AssociationMember::where('id',$id)->first();
        return view('webviews/admin_edit', $this->data);
    }
    public function updateAssociationMembersDetails(Request $req)
    {
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = 'member'.time().'.'.$req->image->extension();
            $destinationPath = storage_path('../../images/members');
            $file->move($destinationPath, $filename);
            $image = 'images/members/'.$filename;
        }
        else{
            $image=$req->image;
        }
        AssociationMember::where('id',$req->id)->update([
            'name'=>$req->name,
            'image'=>$image,
            'position'=>$req->position,
            'designation'=>$req->designation,

        ]);
        
        return redirect('view-association-members')->with('success', 1);

        //return redirect('assign-priviledge/'.$req->ain);
    }

    public function deleteAssociationMember($id) {
    	AssociationMember::where('id', $id)->delete();
    	//Return Response
    	return back()->with('success', 1);
    }

    public function deleteAssociation($id) {
        Association::where('name', $id)->delete();
        AssociationMember::where('association', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function joinAssociation() {
        //Setting Page Title
        $this->data['page_title'] = 'Join Association';
        //Fetching Data
        $this->data['associations'] = Association::orderBy('name', 'asc')->get();
        //Return response
        return view('webviews/admin_join_association', $this->data);
    }

    public function joinAssociationSubmit(Request $req) {
        //Uploading Image
        $file = $req->file('image');
        $filename = 'member'.time().Auth::id().'.'.$req->image->extension();
        $destinationPath = storage_path('../../../www/sonamandi/images/members');
        $file->move($destinationPath, $filename);
        //Submit to Database
        $reg = new AssociationMember;
        $reg->image = 'images/members/'.$filename;
        $reg->name = $req->name;
        $reg->designation = 'member';
        $reg->position = 9999;
        $reg->association = $req->association;
        $reg->save();

        //Return Response
        return back()->with('success', 1);
    }
}
