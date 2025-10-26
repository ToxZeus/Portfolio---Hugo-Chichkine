<?php
class HomeController {
    public function index() {
        $data = [
            'title' => 'Hugo Chichkine - Portfolio',
            'sections' => [
                'academic' => $this->getAcademicData(),
                'skills' => $this->getSkillsData(),
                'projects' => $this->getProjectsData(),
                'experience' => $this->getExperienceData()
            ]
        ];
        
        View::render('home/index', $data);
    }
    
    private function getAcademicData() {
        // TODO: Implement data retrieval
        return [];
    }
    
    private function getSkillsData() {
        // TODO: Implement data retrieval
        return [];
    }
    
    private function getProjectsData() {
        // TODO: Implement data retrieval
        return [];
    }
    
    private function getExperienceData() {
        // TODO: Implement data retrieval
        return [];
    }
}