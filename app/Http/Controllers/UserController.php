<?php   
// namespace App\Http\Controllers;

//     use App\User;
//     use Illuminate\Http\Request;
//     use Illuminate\Support\Facades\Hash;
//     use Illuminate\Support\Facades\Validator;
//     use JWTAuth;
//     use Tymon\JWTAuth\Exceptions\JWTException;
//     use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;

// class UserController extends Controller
// {
//     public function authenticate(Request $request)
//     {
//         $credentials = $request->only('email', 'password');
//         try {
//             if (! $token = FacadesJWTAuth::attempt($credentials)) {
//                 return response()->json(['error' => 'invalid_credentials'], 400);
//             }
//         } catch (JWTException $e) {
//             return response()->json(['error' => 'could_not_create_token'], 500);
//         }
//         return response()->json(compact('token'));
//     }
//     public function getAuthenticatedUser()
//     {
//             if (!$user = FacadesJWTAuth::parseToken()->authenticate()) {
//                     return response()->json(['user_not_found'], 404);
//             }
            
//             return response()->json(compact('user'));
//     }

//     /**
//      * REGISRO
//      */
    
//     public function register(Request $request)
//         {
//                 $validator = Validator::make($request->all(), [
//                 'name' => 'required|string|max:255',
//                 'email' => 'required|string|email|max:255|unique:users',
//                 'password' => 'required|string|min:6|confirmed',
//             ]);

//             if($validator->fails()){
//                     return response()->json($validator->errors()->toJson(), 400);
//             }

//             $user = User::create([
//                 'name' => $request->get('name'),
//                 'email' => $request->get('email'),
//                 'password' => Hash::make($request->get('password')),
//             ]);

//             $token = FacadesJWTAuth::fromUser($user);

//             return response()->json(compact('user','token'),201);
//         }
// }