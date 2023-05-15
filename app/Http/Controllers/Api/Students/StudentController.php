 <?php

namespace App\Http\Controllers\Api\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;//
use App\Http\Controllers\Api\ApiResponsetrait;//
use Response;//
use App\Http\Resources\StudentResource;//
use Illuminate\Support\Facades\Validator; //
// class StudentController extends Controller
// {
//     use ApiResponsetrait; //

//     public function index(){
//         $students=StudentResource::collection(Student::get());//collection اعايز ارجع اكتر من حاجه
//         return $this->apiResponse($students ,'okkkk',200);
//     }

//     public function show($id){
//         // $student=new StudentResource(Student::find($id));
//         $student = Student::find($id);
//         if($student){
//             return $this->apiResponse(new StudentResource($student),'okkk4',200);
//              //new 1 اعايز ارجع حاجه
//         }
//         else{
//         return $this->apiResponse(null,'this student not found',404);
// }
// }
//     public function store(request $request){
//     //     // validation
//         $validator = Validator::make($request->all(), [
//             // 'id' =>'required',
//             'name'=>'required',
//             'email'=>'required',
//             'password'=>'required',
//             // 'gender_id'=>'required',
//             // 'Grade_id'=>'required',
//             // 'Classroom_id'=>'required',
//             // 'section_id'=>'required',
//             // 'parent_id' =>'required',
//             // 'nationalitie_id'=>'required',
//             // 'blood_id'=>'required',
//             // 'Date_Birth'=>'required',
//             // 'academic_year'=>'required',
//             // 'softDeletes'=>'required',
//         ]);
//         if($validator->fails()){
//             return $this->apiResponse(null, $validator->errors(),400);
//         }
//         $student = Student::create($request->all());
//         if($student){
//             return $this->apiResponse(new StudentResource($student),'new student was successfully added',201);
//         }
//         return $this->apiResponse(null,'the student was not added',400);
//     }


//     public function update(request $request ,$id){
//         // validation
//         $validator = Validator::make($request->all(), [
//             // 'id' =>'required',
//             'name'=>'required',
//             'email'=>'required',
//             // 'password'=>'required',
//             // 'gender_id'=>'required',
//             // 'Grade_id'=>'required',
//             // 'Classroom_id'=>'required',
//             // 'section_id'=>'required',
//         ]);
//         if ($validator->fails()) {
//             return $this->apiResponse(null, $validator->errors(),400);}
//         // $this->validatePost(new validator);
//         $student= Student::find($id);
//             if(!$student){
//                 return $this->apiResponse(null,'this student not found',404);}

//             $student->update($request->all());
//             if($student){
//                 return $this->apiResponse(new StudentResource($student),'the student was successfully updated',201);
//             }}

//         public function destroy($id){
//             $student = Student::find($id);
//             if(!$student){
//             return $this->apiResponse(null,'this student not found',404);}

//             $student->delete($id);
//             if($student){
//                 return $this->apiResponse(null,'the student was deleted',200);
//             }}
// }




// /******************* */
// public function index(){

//     $students = Student::get();
//     $msg=['ok'];
// return Response($students,200,$msg);
// }
// }
