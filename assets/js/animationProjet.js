document.addEventListener('DOMContentLoaded', (event) => {
    const polygons = document.querySelectorAll('.grid-item-polygon');
    
    polygons.forEach(polygon => {
        polygon.addEventListener('mouseover', () => {
            const projectName = polygon.getAttribute('data-project');
            const relatedItems = document.querySelectorAll(`.grid-item-rectangle[data-project="${projectName}"]`);
            
            relatedItems.forEach(item => {
                item.classList.add('show');
            });
        });
        
        polygon.addEventListener('mouseout', () => {
            const projectName = polygon.getAttribute('data-project');
            const relatedItems = document.querySelectorAll(`.grid-item-rectangle[data-project="${projectName}"]`);
            
            relatedItems.forEach(item => {
                item.classList.remove('show');
            });
        });
    });
});