<?php

use Illuminate\Database\Seeder;
use App\ClassModel;

class ClassReceiveSubjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('class_receive_subject')->delete();
		
		$classes = ['X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'X8', 'X9', 'X10'];
		foreach ($classes as $keyClass){
			$classModel = new ClassModel();
			$class = $classModel->find($keyClass);
			$class->hasManySubjects()->attach('AGM01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('MTK01a', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPSSEJ01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPAKIM01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPAFIS01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPABIO01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BINGG01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SMSK01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('MTK01b', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BIND01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SRP01', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
		}
		
		$classes = ['XIIA1', 'XIIA2', 'XIIA3', 'XIIA4', 'XIIA5', 'XIIA6'];
		foreach ($classes as $keyClass){
			$classModel = new ClassModel();
			$class = $classModel->find($keyClass);
			$class->hasManySubjects()->attach('IPAKIM02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPAFIS02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPABIO02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BINGG02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SMSK02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('MTK02b', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('MTK02a', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BIND02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SRP02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('PKN02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('AGM02', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
		}
		
		$classes = ['XIIIA1', 'XIIIA2', 'XIIIA3', 'XIIIA4', 'XIIIA5', 'XIIIA6'];
		foreach ($classes as $keyClass){
			$classModel = new ClassModel();
			$class = $classModel->find($keyClass);
			$class->hasManySubjects()->attach('MTK03b', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('MTK03a', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BIND03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPAKIM03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPAFIS03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('IPABIO03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('BINGG03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SMSK03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('SRP03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('PKN03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
			$class->hasManySubjects()->attach('AGM03', [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
		}
	}
}
